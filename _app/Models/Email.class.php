<?php

require_once '_app/Library/PHPMailer/class.phpmailer.php';

/**
 * Email [MODEL]
 * Modelo responsável por configurar a PHPMailer, validar os dados e disparar e-mails do sistema
 * 
 * @copyright (c) 2017, Adriano S. M. ZATER
 */
class Email {

    /** @var PHPMailer */
    private $Mail;

    /** EMAIL DADOS */
    private $Dados;

    /** CORPO DO E-MAIL */
    private $Assunto;
    private $Mensagem;

    /** REMETENTE */
    private $RemetenteNome;
    private $RemetenteEmail;

    /** DESTINO */
    private $DestinoNome;
    private $DestinoEmail;

    /** CONTROLE */
    private $Error;
    private $Result;

    public function __construct() {
        $this->Mail = new PHPMailer;
        $this->Mail->Host = MAILHOST;
        $this->Mail->Port = MAILPORT;
        $this->Mail->Username = MAILUSER;
        $this->Mail->Password = MAILPASS;
        $this->Mail->CharSet = 'UTF-8';
    }

    public function Enviar(array $Dados) {
        $this->Dados = $Dados;
        $this->Clear();

        if (in_array('', $this->Dados)):
            $this->Error = ["Erro ao enviar mensagem: para enviar esse e-mail preencha os campos requisitados!", ZT_ALERT];
            $this->Result = false;
        elseif (!Check::Email($this->Dados['RemetenteEmail'])):
            $this->Error = ["Erro ao enviar mensagem: Email informado deve ser um email válido, informe e-mail!", ZT_ALERT];
            $this->Result = false;
        else:
            $this->setMail();
            $this->Config();
            $this->sendMail();
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
    private function Clear() {
        array_map('strip_tags', $this->Dados);
        array_map('trim', $this->Dados);
    }

    private function setMail() {
        $this->Assunto = $this->Dados['Assunto'];
        $this->Mensagem = $this->Dados['Mensagem'];
        $this->RemetenteNome = $this->Dados['RemetenteNome'];
        $this->RemetenteEmail = $this->Dados['RemetenteEmail'];
        $this->DestinoNome = $this->Dados['DestinoNome'];
        $this->DestinoEmail = $this->Dados['DestinoEmail'];

        $this->Dados = null;
        $this->setMsg();
    }

    //Aqui a mensagem, PERSONALIZAR
    private function setMsg() {
        $this->Mensagem = "{$this->Mensagem}<hr><small>Recebida em: " . date('d/m/Y H:i') . "</small>";
    }

    private function Config() {
        //AUTENTICAÇÃO SMTP
        $this->Mail->IsSMTP(); // IsSMTP() Metodo da classe PHPMailer
        $this->Mail->SMTPAuth = true; // SMTPAuth() Metodo da classe PHPMailer
        $this->Mail->IsHTML(); // IsHTML() Metodo da classe PHPMailer
        //REMETENTE E RETORNO
        $this->Mail->From = MAILUSER;
        $this->Mail->FromName = $this->RemetenteNome;
        $this->Mail->AddReplyTo($this->RemetenteEmail, $this->RemetenteNome);

        //ASSUNTO, MENSAGEM E DESTINO
        $this->Mail->Subject = $this->Assunto;
        $this->Mail->Body = $this->Mensagem;
        $this->Mail->AddAddress($this->DestinoEmail, $this->DestinoNome);
    }
    
    private function sendMail(){
        if ($this->Mail->Send())://Aqui se e-mail foi enviado
            $this->Error = ["Seu Email foi enviado com sucesso", ZT_ACCEPT];
            $this->Result = true;
        else://Aqui caso e-mail não seja enviado
            $this->Error = ["Erro ao enviar mensagem: Entre em contato com o administrador. ({$this->Mail->ErrorInfo})", ZT_ERROR];
            $this->Result = false;
        endif;
    }

}
