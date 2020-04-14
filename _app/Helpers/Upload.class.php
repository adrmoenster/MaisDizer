<?php

/**
 * Upload.class [HELPER]
 * Responsável por executar upload de imagens, arquivos e mídeas no Sistema!
 * 
 * @copyright (c) 2017, Adriano S. M. ZATER
 */
class Upload {

    private $File;
    private $Name;
    private $Send;

    /** IMAGE UPLOAD */
    private $Width;
    private $Image;

    /** RESULTSET - são retornos da classe */
    private $Result;
    private $Error;

    /** DIRETÓRIOS */
    private $Folder;
    private static $BaseDir; //Verifica diretório padrão de Uploads

    /**
     * Verifica e cria o diretório padrÃ£o de uploads no sistema!<br>
     * <b>../uploads/</b>
     */

    public function __construct($BaseDir = null) {
        self::$BaseDir = ((string) $BaseDir ? $BaseDir : '../uploads/');
        if (!file_exists(self::$BaseDir) && !is_dir(self::$BaseDir)):
            mkdir(self::$BaseDir, 0777);
        endif;
    }

    /**
     * <b>Image: </b> Metodo responsável por executar o Upload do arquivo
     * 
     * @param array $Image = 
     * @param string $Name = Informar nome para a Imagem
     * @param int $Width = Tamanho da Imagem
     * @param string $Folder = Diretório onde deve ficar a imagem
     */
    public function Image(array $Image, $Name = null, $Width = null, $Folder = null) {
        $this->File = $Image;
        $this->Name = ((string) $Name ? $Name : substr($Image['name'], 0, strrpos($Image['name'], '.'))); //Se não informar nome para imagem ele vai considerar mesmo nome que estiver na imagem, ja definindo a extensão
        $this->Width = ((int) $Width ? $Width : 1024); //Se não informar um tamanho a ser redimencionado ele irá considerar 1024px      
        $this->Folder = ((string) $Folder ? $Folder : '/images'); //Se informar string com nome do diretório ele considera esse nome de diretório, se não informar ele considera como "imagens"
        $this->CheckFolder($this->Folder); //Chamando o metodo Privado CheckFolder
        $this->setFileName(); //Chamando o metodo Privado setFileName
        $this->UploadImage();
       
    }

    /**
     * <b>Image: </b> Metodo responsável por executar o Upload do arquivo
     * 
     * @param array $Image = 
     * @param string $Name = Informar nome para a Imagem
     * @param int $Width = Tamanho da Imagem
     * @param string $Folder = Diretório onde deve ficar a imagem
     */
    public function ImageThumb(array $Image, $Name = null, $Width = null, $Folder = null) {
        $this->File = $Image;
        $this->Name = ((string) $Name ? $Name . "-thumb" : substr($Image['name'], 0, strrpos($Image['name'] . "-thumb", '.'))); //Se não informar nome para imagem ele vai considerar mesmo nome que estiver na imagem, ja definindo a extensão
        $this->Width = ((int) $Width ? $Width : 345); //Se não informar um tamanho a ser redimencionado ele irá considerar 1024px      
        $this->Folder = ((string) $Folder ? $Folder : '/images'); //Se informar string com nome do diretório ele considera esse nome de diretório, se não informar ele considera como "imagens"
        $this->CheckFolder($this->Folder); //Chamando o metodo Privado CheckFolder
        $this->setFileNameThumb(); //Chamando o metodo Privado setFileName
        $this->UploadImage();
    }

    /**
     * <b>Enviar Arquivo:</b> Basta envelopar um $_FILES de um arquivo e caso queira um nome e um tamanho personalizado.
     * Caso nÃ£o informe o tamanho serÃ¡ 2mb!
     * @param FILES $File = Enviar envelope de $_FILES (PDF ou DOCX)
     * @param STRING $Name = Nome do arquivo ( ou do artigo )
     * @param STRING $Folder = Pasta personalizada
     * @param STRING $MaxFileSize = Tamanho mÃ¡ximo do arquivo (2mb)
     */
    public function File(array $File, $Name = null, $Folder = null, $MaxFileSize = null) {
        $this->File = $File;
        $this->Name = ((string) $Name ? $Name : substr($File['name'], 0, strrpos($File['name'], '.')));
        $this->Folder = ((string) $Folder ? $Folder : '/files');
        $MaxFileSize = ((int) $MaxFileSize ? $MaxFileSize : 2);

        $FileAccept = ['application/pdf', 'application/vnd.ms-xpsdocument'];

        if ($this->File['size'] > ($MaxFileSize * (1024 * 1024 * 10))):
            $this->Result = false;
            $this->Error = "Arquivo muito grande, tamanho máximo permitido de {$MaxFileSize}mb";
        elseif (!in_array($this->File['type'], $FileAccept)):
            $this->Result = false;
            $this->Error = 'Tipo de arquivo não suportado. Envie .PDF ou XPS';

        else:
            $this->CheckFolder($this->Folder);
            $this->setFileName();
            $this->moveFile();
        endif;
    }

    /**
     * <b>Enviar Mídia:</b> Basta envelopar um $_FILES de uma mídia e caso queira um nome e um tamanho personalizado.
     * Caso não informe o tamanho será 40mb!
     * @param FILES $Media = Enviar envelope de $_FILES (MP3 ou MP4)
     * @param STRING $Name = Nome do arquivo ( ou do artigo )
     * @param STRING $Folder = Pasta personalizada
     * @param STRING $MaxFileSize = Tamanho máximo do arquivo (40mb)
     */
    public function Media(array $Media, $Name = null, $Folder = null, $MaxFileSize = null) {
        $this->File = $Media;
        $this->Name = ((string) $Name ? $Name : substr($Media['name'], 0, strrpos($Media['name'], '.')));
        $this->Folder = ((string) $Folder ? $Folder : '/medias');
        $MaxFileSize = ((int) $MaxFileSize ? $MaxFileSize : 40);

        $FileAccept = ['audio/mp3', 'video/mp4'];

        if ($this->File['size'] > ($MaxFileSize * (1024 * 1024))):
            $this->Result = false;
            $this->Error = "Arquivo muito grande, tamanho máximo permitido de {$MaxFileSize}mb";
        elseif (!in_array($this->File['type'], $FileAccept)):
            $this->Result = false;
            $this->Error = 'Tipo de arquivo não suportado. Envie vídeo .MP4 ou audio MP3';

        else:
            $this->CheckFolder($this->Folder);
            $this->setFileName();
            $this->moveFile();
        endif;
    }

    public function getResult() {
        return $this->Result;
    }

    public function getError() {
        return $this->Error;
    }

    /**
     * ****************************************
     * *********** PRIVATE METODOS ************
     * ****************************************
     */
    //Função responsável por checar se a pasta ja existe, se não existir então cria pasta com nome padrão, dentro desta pasta cria uma pasta com o ano e dentro cria outra pasta com o Mês.
    private function CheckFolder($Folder) {
        list($y, $m) = explode('/', date('Y/m')); //Atribui a váriável $y O Ano e a variável $m o mês
        $this->CreateFolder("{$Folder}"); //Criando a pasta inicial usando o metodo de criação CreateFolder
        $this->CreateFolder("{$Folder}/{$y}"); //Criando a pasta com o ano dentro da pasta Inicial, também usando o método Privado CreateFolder
        $this->CreateFolder("{$Folder}/{$y}/{$m}/"); //Criando a pasta com o mês dentro da pasta com o ano, novamente usando metodo Privado CreateFolder
        $this->Send = "{$Folder}/{$y}/{$m}/"; //Adicionando ao atributo Send o endereço completo das pastas e suas subpastas, pastainicial/ano/mes/
    }

    //Metodo que verifica se a pasta padrão, pasta ano e pasta mês existem, se não existirem então cria, ja adicionando permissão as pastas
    private function CreateFolder($Folder) {
        if (!file_exists(self::$BaseDir . $Folder) && !is_dir(self::$BaseDir . $Folder))://Verifica se a pasta base existe, se não existir ai entra no if
            mkdir(self::$BaseDir . $Folder, 0777); //Criando a pasta com nome definico na $Folder
        endif;
    }

    //Metodo que irá verificar se o arquivo enviado ja existe na pasta informada, se existir ele renomeia essa atual arquivo para mesmo nome sem espaços e caracteres maiusculos, mais hora do upload
    private function setFileName() {
        $FileName = Check::Name($this->Name) . strrchr($this->File['name'], '.'); //strrchr - encontra a ultima ocorrência de um caractere em uma string
        if (file_exists(self::$BaseDir . $this->Send . $FileName))://Verifica se arquivo ja existe no diretório e pasta informada
            $FileName = Check::Name($this->Name) . '-' . time() . strrchr($this->File['name'], '.'); //Se arquivo ja existir então renomeia substituindo espaços por trassos e ainda adiciona horário ao mesmo nome, evitando assim de existir dois arquivos com mesmo nome e sua extensão
        endif;
        $this->Name = $FileName; //Atributo nome recebe conteudo da váriável $FileName
    }

    //Metodo que irá verificar se o arquivo enviado ja existe na pasta informada, se existir ele renomeia essa atual arquivo para mesmo nome sem espaços e caracteres maiusculos, mais hora do upload
    private function setFileNameThumb() {
        $FileNameThumb = Check::Name($this->Name) . strrchr($this->File['name'], '.'); //strrchr - encontra a ultima ocorrência de um caractere em uma string
        if (file_exists(self::$BaseDir . $this->Send . $FileNameThumb))://Verifica se arquivo ja existe no diretório e pasta informada
            $FileNameThumb = Check::Name($this->Name) . time() . strrchr($this->File['name'], '.'); //Se arquivo ja existir então renomeia substituindo espaços por trassos e ainda adiciona horário ao mesmo nome, evitando assim de existir dois arquivos com mesmo nome e sua extensão
        endif;
        $this->Name = $FileNameThumb; //Atributo nome recebe conteudo da váriável $FileName
    }

    //Realiza o Upload de imagens redimencionando a mesma!
    public function UploadImage() {
        switch ($this->File['type']):
            case 'image/jpg':
            case 'image/jpeg':
            case 'image/pjpeg':
                $this->Image = imagecreatefromjpeg($this->File['tmp_name']);
                break;
            case 'image/png':
            case 'image/-x-png':
                $this->Image = imagecreatefrompng($this->File['tmp_name']);
                break;
            case 'image/gif':
                $this->Image = imagecreatefromgif($this->File['tmp_name']);
                break;
        endswitch;

        if (!$this->Image):
            $this->Result = false;
            $this->Error = 'Tipo de arquivo inválido, envie imagens JPG, PNG ou GIF';
        else:
            $Largura_original = imagesx($this->Image);
            $Altura_original = imagesy($this->Image);
            $Largura_alvo = ($this->Width < $Largura_original ? $this->Width : $Largura_original);
            $Altura_nova = ($Largura_alvo * $Altura_original) / $Largura_original;

            $NewImage = imagecreatetruecolor($Largura_alvo, $Altura_nova);
            imagealphablending($NewImage, false);
            imagesavealpha($NewImage, true);
            imagecopyresampled($NewImage, $this->Image, 0, 0, 0, 0, $Largura_alvo, $Altura_nova, $Largura_original, $Altura_original);

            switch ($this->File['type']):
                case 'image/jpg':
                case 'image/jpeg':
                case 'image/pjpeg':
                    imagejpeg($NewImage, self::$BaseDir . $this->Send . $this->Name);
                    break;
                case 'image/png':
                case 'image/-x-png':
                    imagepng($NewImage, self::$BaseDir . $this->Send . $this->Name);
                    break;
                case 'image/gif':
                    imagegif($NewImage, self::$BaseDir . $this->Send . $this->Name);
                    break;
            endswitch;

            if (!$NewImage):
                $this->Result = false;
                $this->Error = 'Tipo de arquivo inválido, envie imagem nos formatos, jpg, png ou gif';
            else:
                $this->Result = $this->Send . $this->Name;
                $this->Error = null;

            endif;

            imagedestroy($this->Image);
            imagedestroy($NewImage);
        endif;
    }

 

    //Envia arquivos e mídias
    private function moveFile() {
        if (move_uploaded_file($this->File['tmp_name'], self::$BaseDir . $this->Send . $this->Name)):
            $this->Result = $this->Send . $this->Name;
            $this->Error = null;
        else:
            $this->Result = false;
            $this->Error = 'Erro ao mover o arquivo. Favor tente mais tarde!';
        endif;
    }
    
  
    
}