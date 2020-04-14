
<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Edita</span> - Usuario</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="d-flex justify-content-center">
                    <a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                    <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                    <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="painel.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Inicio</a>
                    <a href="#" class="breadcrumb-item">Usuario</a>
                    <span class="breadcrumb-item active">Edita</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="breadcrumb justify-content-center">
                    <a href="#" class="breadcrumb-elements-item">
                        <i class="icon-comment-discussion mr-2"></i>
                        Support
                    </a>

                    <div class="breadcrumb-elements-item dropdown p-0">
                        <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-gear mr-2"></i>
                            Settings
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                            <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                            <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header -->






    <!-- INICIO form_inputs -->
    <!-- Content area -->
    <div class="content">

        <!-- Form inputs -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Basic form inputs</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <p class="mb-4">Examples of standard form controls supported in an example form layout. Individual form controls automatically receive some global styling. All textual <code>&lt;input></code>, <code>&lt;textarea></code>, and <code>&lt;select></code> elements with <code>.form-control</code> are set to <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group</code> for optimum spacing. Labels in horizontal form require <code>.col-form-label</code> class.</p>

                <form action="#">
                    <fieldset class="mb-3">
                        <legend class="text-uppercase font-size-sm font-weight-bold">Basic inputs</legend>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Default text input</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Password</label>
                            <div class="col-lg-10">
                                <input type="password" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Input with placeholder</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" placeholder="Enter your username...">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Read only field</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" readonly value="read only">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Disabled field</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" disabled value="disabled">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Predefined value</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="http://">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Disabled autocomplete</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" placeholder="Autocomplete is off" autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Maximum value</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" maxlength="4" placeholder="Maximum 4 characters">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2 cursor-pointer" for="clickable-label">Focus on label click</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="clickable-label" placeholder="Field focus on label click">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Static text</label>
                            <div class="col-lg-10">
                                <div class="form-control-plaintext">This is a static text</div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Textarea</label>
                            <div class="col-lg-10">
                                <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea"></textarea>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="mb-3">
                        <legend class="text-uppercase font-size-sm font-weight-bold">Basic selects</legend>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Single select</label>
                            <div class="col-lg-10">
                                <select class="form-control">
                                    <option value="opt1">Default select box</option>
                                    <option value="opt2">Option 2</option>
                                    <option value="opt3">Option 3</option>
                                    <option value="opt4">Option 4</option>
                                    <option value="opt5">Option 5</option>
                                    <option value="opt6">Option 6</option>
                                    <option value="opt7">Option 7</option>
                                    <option value="opt8">Option 8</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Styled select</label>
                            <div class="col-lg-10">
                                <select class="form-control form-control-uniform" data-fouc>
                                    <option value="opt1">Styled select box</option>
                                    <option value="opt2">Option 2</option>
                                    <option value="opt3">Option 3</option>
                                    <option value="opt4">Option 4</option>
                                    <option value="opt5">Option 5</option>
                                    <option value="opt6">Option 6</option>
                                    <option value="opt7">Option 7</option>
                                    <option value="opt8">Option 8</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Custom BS select</label>
                            <div class="col-lg-10">
                                <select class="custom-select">
                                    <option value="opt1">Styled select box</option>
                                    <option value="opt2">Option 2</option>
                                    <option value="opt3">Option 3</option>
                                    <option value="opt4">Option 4</option>
                                    <option value="opt5">Option 5</option>
                                    <option value="opt6">Option 6</option>
                                    <option value="opt7">Option 7</option>
                                    <option value="opt8">Option 8</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Multiple select</label>
                            <div class="col-lg-10">
                                <select multiple="multiple" class="form-control">
                                    <option selected>Amsterdam</option>      
                                    <option selected>Atlanta</option>
                                    <option>Baltimore</option>
                                    <option>Boston</option>
                                    <option>Buenos Aires</option>
                                    <option>Calgary</option>
                                    <option selected>Chicago</option>
                                    <option>Denver</option>
                                    <option>Dubai</option>
                                    <option>Frankfurt</option>
                                    <option>Hong Kong</option>
                                    <option>Honolulu</option>
                                    <option>Houston</option>
                                    <option>Kuala Lumpur</option>
                                    <option>London</option>
                                    <option>Los Angeles</option>
                                    <option>Melbourne</option>
                                    <option>Mexico City</option>
                                    <option>Miami</option>
                                    <option>Minneapolis</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="mb-3">
                        <legend class="text-uppercase font-size-sm font-weight-bold">Basic file inputs</legend>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Default file input</label>
                            <div class="col-lg-10">
                                <input type="file" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Styled file input</label>
                            <div class="col-lg-10">
                                <input type="file" class="form-control-uniform" data-fouc>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Custom BS file input</label>
                            <div class="col-lg-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="mb-3">
                        <legend class="text-uppercase font-size-sm font-weight-bold">Form helpers</legend>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Text form helpers</label>
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" class="form-control">
                                        <span class="form-text text-muted">Left aligned helper</span>
                                    </div>

                                    <div class="col-md-4">
                                        <input type="text" class="form-control">
                                        <span class="form-text text-muted text-center">Centered helper</span>
                                    </div>

                                    <div class="col-md-4">
                                        <input type="text" class="form-control">
                                        <span class="form-text text-muted text-right">Right aligned helper</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Full width badge helpers</label>
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" class="form-control">
                                        <span class="badge d-block badge-primary form-text text-left">Left aligned badge</span>
                                    </div>

                                    <div class="col-md-4">
                                        <input type="text" class="form-control">
                                        <span class="badge d-block badge-danger form-text">Centered badge</span>
                                    </div>

                                    <div class="col-md-4">
                                        <input type="text" class="form-control">
                                        <span class="badge d-block badge-info form-text text-right">Right aligned badge</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Block badge helpers</label>
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" class="form-control">
                                        <div class="d-block form-text">
                                            <span class="badge badge-primary">Left aligned badge</span>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <input type="text" class="form-control">
                                        <div class="d-block form-text text-center">
                                            <span class="badge badge-danger">Centered badge</span>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <input type="text" class="form-control">
                                        <div class="d-block form-text text-right">
                                            <span class="badge badge-info text-right">Right aligned badge</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Inline text helper</label>
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-lg-6 mt-1 mt-lg-0 align-self-center">
                                        <span class="text-muted">Inline text helper</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Inline badge helper</label>
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-lg-6 mt-1 mt-lg-0 align-self-center">
                                        <span class="badge bg-teal">Inline badge helper</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="mb-3">
                        <legend class="text-uppercase font-size-sm font-weight-bold">Input icons</legend>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Input with icons</label>
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-feedback form-group-feedback-left">
                                            <input type="text" class="form-control form-control-lg" placeholder="Left icon, input large">
                                            <div class="form-control-feedback form-control-feedback-lg">
                                                <i class="icon-make-group"></i>
                                            </div>
                                        </div>

                                        <div class="form-group form-group-feedback form-group-feedback-left">
                                            <input type="text" class="form-control" placeholder="Left icon, input default">
                                            <div class="form-control-feedback">
                                                <i class="icon-droplets"></i>
                                            </div>
                                        </div>

                                        <div class="form-group form-group-feedback form-group-feedback-left">
                                            <input type="text" class="form-control form-control-sm" placeholder="Left icon, input small">
                                            <div class="form-control-feedback form-control-feedback-sm">
                                                <i class="icon-pin-alt"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group form-group-feedback form-group-feedback-right">
                                            <input type="text" class="form-control form-control-lg" placeholder="Right icon, input large">
                                            <div class="form-control-feedback form-control-feedback-lg">
                                                <i class="icon-make-group"></i>
                                            </div>
                                        </div>

                                        <div class="form-group form-group-feedback form-group-feedback-right">
                                            <input type="text" class="form-control" placeholder="Right icon, input default">
                                            <div class="form-control-feedback">
                                                <i class="icon-droplets"></i>
                                            </div>
                                        </div>

                                        <div class="form-group form-group-feedback form-group-feedback-right">
                                            <input type="text" class="form-control form-control-sm" placeholder="Right icon, input small">
                                            <div class="form-control-feedback form-control-feedback-sm">
                                                <i class="icon-pin-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Input with spinners</label>
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-feedback form-group-feedback-left">
                                            <input type="text" class="form-control" placeholder="Left spinner">
                                            <div class="form-control-feedback">
                                                <i class="icon-spinner2 spinner"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group form-group-feedback form-group-feedback-right">
                                            <input type="text" class="form-control" placeholder="Right spinner">
                                            <div class="form-control-feedback">
                                                <i class="icon-spinner2 spinner"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="mb-3">
                        <legend class="text-uppercase font-size-sm font-weight-bold">Validation states</legend>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2 font-weight-semibold text-success">Valid state</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control border-success" placeholder="Valid state">
                                <span class="form-text text-success">Valid state helper</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2 font-weight-semibold text-success">Valid state with icon</label>
                            <div class="col-lg-10">
                                <div class="form-group-feedback form-group-feedback-right">
                                    <input type="text" class="form-control border-success" placeholder="Valid state">
                                    <div class="form-control-feedback text-success">
                                        <i class="icon-checkmark-circle"></i>
                                    </div>
                                </div>
                                <span class="form-text text-success">Valid state helper</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2 font-weight-semibold text-danger">Invalid state</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control border-danger" placeholder="Invalid state">
                                <span class="form-text text-danger">Invalid state helper</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2 font-weight-semibold text-danger">Invalid state with icon</label>
                            <div class="col-lg-10">
                                <div class="form-group-feedback form-group-feedback-right">
                                    <input type="text" class="form-control border-danger" placeholder="Invalid state">
                                    <div class="form-control-feedback text-danger">
                                        <i class="icon-cancel-circle2"></i>
                                    </div>
                                </div>
                                <span class="form-text text-danger">Invalid state helper</span>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="mb-3">
                        <legend class="text-uppercase font-size-sm font-weight-bold">Text options</legend>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Light text</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control font-weight-light" placeholder="Input with light text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Semibold text</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control font-weight-semibold" placeholder="Input with semibold text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Bold text</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control font-weight-bold" placeholder="Input with bold text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Capitalized text</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control text-capitalize" placeholder="Input with capitalized text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Centered text</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control text-center" placeholder="Input with centered text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Right aligned text</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control text-right" placeholder="Input with right aligned text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Uppercase text</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control text-uppercase" placeholder="Input with uppercase text">
                                <span class="form-text text-muted">Other text options work as well</span>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="mb-3">
                        <legend class="text-uppercase font-size-sm font-weight-bold">Field options</legend>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Tooltip on focus</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" data-popup="tooltip" data-trigger="focus" title="Tooltip on focus" placeholder="Click on input">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Tooltip on hover</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" data-popup="tooltip" title="Tooltip on hover" placeholder="Hover on input">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Rounded input</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control rounded-round" placeholder="Rounded input">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Roundless input</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control rounded-0" placeholder="Roundless input">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Fixed input sizing</label>
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-3">
                                        <input type="text" class="form-control" placeholder=".col-3">
                                    </div>

                                    <div class="col-4">
                                        <input type="text" class="form-control" placeholder=".col-4">
                                    </div>

                                    <div class="col-5">
                                        <input type="text" class="form-control" placeholder=".col-5">
                                    </div>
                                </div>
                                <span class="form-text text-muted">Available in 12 columns sizes since it's based on 12 columns grid</span>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="mb-3">
                        <legend class="text-uppercase font-size-sm font-weight-bold">Sizing options</legend>

                        <div class="form-group row">
                            <label class="col-form-label col-form-label-lg col-lg-2">Large size</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control form-control-lg" placeholder=".col-form-label-lg .form-control-lg">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Default size</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" placeholder=".col-form-label .form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-form-label-sm col-lg-2">Small size</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control form-control-sm" placeholder=".col-form-label-sm .form-control-sm">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Inputs only</label>
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control form-control-lg" type="text" placeholder="Large input height">
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Default input height">
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control form-control-sm" type="text" placeholder="Small input height">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="form-control form-control-lg">
                                                <option value="opt1">Large select height</option>
                                                <option value="opt2">Option 2</option>
                                                <option value="opt3">Option 3</option>
                                                <option value="opt4">Option 4</option>
                                                <option value="opt5">Option 5</option>
                                                <option value="opt6">Option 6</option>
                                                <option value="opt7">Option 7</option>
                                                <option value="opt8">Option 8</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <select class="form-control">
                                                <option value="opt1">Default select height</option>
                                                <option value="opt2">Option 2</option>
                                                <option value="opt3">Option 3</option>
                                                <option value="opt4">Option 4</option>
                                                <option value="opt5">Option 5</option>
                                                <option value="opt6">Option 6</option>
                                                <option value="opt7">Option 7</option>
                                                <option value="opt8">Option 8</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <select class="form-control form-control-sm">
                                                <option value="opt1">Small select height</option>
                                                <option value="opt2">Option 2</option>
                                                <option value="opt3">Option 3</option>
                                                <option value="opt4">Option 4</option>
                                                <option value="opt5">Option 5</option>
                                                <option value="opt6">Option 6</option>
                                                <option value="opt7">Option 7</option>
                                                <option value="opt8">Option 8</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="mb-3">
                        <legend class="text-uppercase font-size-sm font-weight-bold">Color options</legend>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Text color</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control text-violet" value="Custom text color">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Border color</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control border-teal border-1" placeholder="Custom border color">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Background color</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control bg-slate-600 border-slate-600 border-1" placeholder="Custom background color">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Select color</label>
                            <div class="col-lg-10">
                                <select class="form-control bg-indigo-400 border-indigo-400">
                                    <option value="opt1">Custom select color</option>
                                    <option value="opt2">Option 2</option>
                                    <option value="opt3">Option 3</option>
                                    <option value="opt4">Option 4</option>
                                    <option value="opt5">Option 5</option>
                                    <option value="opt6">Option 6</option>
                                    <option value="opt7">Option 7</option>
                                    <option value="opt8">Option 8</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Styled select</label>
                            <div class="col-lg-10">
                                <select class="form-control form-control-uniform-custom">
                                    <option value="opt1">Custom styled select color</option>
                                    <option value="opt2">Option 2</option>
                                    <option value="opt3">Option 3</option>
                                    <option value="opt4">Option 4</option>
                                    <option value="opt5">Option 5</option>
                                    <option value="opt6">Option 6</option>
                                    <option value="opt7">Option 7</option>
                                    <option value="opt8">Option 8</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">File input color</label>
                            <div class="col-lg-10">
                                <input type="file" class="form-control-uniform-custom">
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="mb-3">
                        <legend class="text-uppercase font-size-sm font-weight-bold">Type options</legend>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Datetime</label>
                            <div class="col-md-10">
                                <input class="form-control" type="datetime" name="datetime">
                                <span class="form-text text-muted">Using <code>input type="datetime"</code></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Date</label>
                            <div class="col-md-10">
                                <input class="form-control" type="date" name="date">
                                <span class="form-text text-muted">Using <code>input type="date"</code></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Month</label>
                            <div class="col-md-10">
                                <input class="form-control" type="month" name="month">
                                <span class="form-text text-muted">Using <code>input type="month"</code></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Time</label>
                            <div class="col-md-10">
                                <input class="form-control" type="time" name="time">
                                <span class="form-text text-muted">Using <code>input type="time"</code></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Week</label>
                            <div class="col-md-10">
                                <input class="form-control" type="week" name="week">
                                <span class="form-text text-muted">Using <code>input type="week"</code></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Number</label>
                            <div class="col-md-10">
                                <input class="form-control" type="number" name="number">
                                <span class="form-text text-muted">Using <code>input type="number"</code></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Email</label>
                            <div class="col-md-10">
                                <input class="form-control" type="email" name="email">
                                <span class="form-text text-muted">Using <code>input type="email"</code></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">URL</label>
                            <div class="col-md-10">
                                <input class="form-control" type="url" name="url">
                                <span class="form-text text-muted">Using <code>input type="url"</code></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Search</label>
                            <div class="col-md-10">
                                <input class="form-control" type="search" name="search">
                                <span class="form-text text-muted">Using <code>input type="search"</code></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Tel</label>
                            <div class="col-md-10">
                                <input class="form-control" type="tel" name="tel">
                                <span class="form-text text-muted">Using <code>input type="tel"</code></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Color</label>
                            <div class="col-md-10">
                                <input class="form-control" type="color" name="color">
                                <span class="form-text text-muted">Using <code>input type="color"</code></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Range</label>
                            <div class="col-md-10">
                                <input class="form-control" type="range" name="range" min="0" max="10">
                                <span class="form-text text-muted">Using <code>input type="range"</code></span>
                            </div>
                        </div>
                    </fieldset>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /form inputs -->

    </div>
    <!-- /content area -->

    <!-- FIM form_inputs -->










    <!-- INICIO form_checkboxes_radios -->
    <div class="content">

        <!-- Checkboxes -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Checkboxes</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <p class="mb-3">The HTML input element <code>&lt;input type=checkbox></code> is an input element to enter an array of different values. The <code>value</code> attribute is used to define the value submitted by the checkbox. The <code>checked</code> attribute is used to indicate whether this item is selected. The <code>indeterminate</code> attribute is used to indicate that the checkbox is in an indeterminate state (on most platforms, this draws a horizontal line across the checkbox).</p>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-semibold">Left stacked default</label>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" checked>
                                    Checked default
                                </label>
                            </div>

                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                    Unchecked default
                                </label>
                            </div>

                            <div class="form-check disabled">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" checked disabled>
                                    Disabled default
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="d-block font-weight-semibold">Left inline default</label>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" checked>
                                    Checked default
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                    Unchecked default
                                </label>
                            </div>
                        </div>

                        <div class="form-group pt-2">
                            <label class="font-weight-semibold">Left stacked styled</label>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input-styled" checked data-fouc>
                                    Checked styled
                                </label>
                            </div>

                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input-styled" data-fouc>
                                    Unchecked styled
                                </label>
                            </div>

                            <div class="form-check disabled">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input-styled" disabled data-fouc>
                                    Disabled styled
                                </label>
                            </div>
                        </div>

                        <div class="form-group mb-3 mb-md-2">
                            <label class="d-block font-weight-semibold">Left inline styled</label>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input-styled" checked data-fouc>
                                    Checked styled
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input-styled" data-fouc>
                                    Unchecked styled
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-semibold">Right stacked default</label>
                            <div class="form-check form-check-right">
                                <label class="form-check-label">
                                    Checked default
                                    <input type="checkbox" class="form-check-input" checked>
                                </label>
                            </div>

                            <div class="form-check form-check-right">
                                <label class="form-check-label">
                                    Unchecked default
                                    <input type="checkbox" class="form-check-input">
                                </label>
                            </div>

                            <div class="form-check form-check-right disabled">
                                <label class="form-check-label">
                                    Disabled default
                                    <input type="checkbox" class="form-check-input" checked disabled>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="d-block font-weight-semibold">Right inline default</label>
                            <div class="form-check form-check-inline form-check-right">
                                <label class="form-check-label">
                                    Checked default
                                    <input type="checkbox" class="form-check-input" checked>
                                </label>
                            </div>

                            <div class="form-check form-check-inline form-check-right">
                                <label class="form-check-label">
                                    Unchecked default
                                    <input type="checkbox" class="form-check-input">
                                </label>
                            </div>
                        </div>

                        <div class="form-group pt-2">
                            <label class="d-block font-weight-semibold">Right stacked styled</label>

                            <div class="form-check form-check-right">
                                <label class="form-check-label">
                                    Checked styled
                                    <input type="checkbox" class="form-check-input-styled" checked data-fouc>
                                </label>
                            </div>

                            <div class="form-check form-check-right">
                                <label class="form-check-label">
                                    Unchecked styled
                                    <input type="checkbox" class="form-check-input-styled" data-fouc>
                                </label>
                            </div>

                            <div class="form-check form-check-right disabled">
                                <label class="form-check-label">
                                    Disabled styled
                                    <input type="checkbox" class="form-check-input-styled" checked disabled data-fouc>
                                </label>
                            </div>
                        </div>

                        <div class="form-group mb-3 mb-md-2">
                            <label class="d-block font-weight-semibold">Right inline styled</label>
                            <div class="form-check form-check-inline form-check-right">
                                <label class="form-check-label">
                                    Checked styled
                                    <input type="checkbox" class="form-check-input-styled" checked data-fouc>
                                </label>
                            </div>

                            <div class="form-check form-check-inline form-check-right">
                                <label class="form-check-label">
                                    Unchecked styled
                                    <input type="checkbox" class="form-check-input-styled" data-fouc>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /checkboxes -->


        <!-- Radio buttons -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Radio buttons</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <p class="mb-3">Radio button is an element that can be turned on and off. Radio buttons are almost always grouped together in groups. Only one radio button within the same <code>radiogroup</code> may be selected at a time. The user can switch which radio button is turned on by selecting it with the mouse or keyboard. Other radio buttons in the same group are turned off. A label, specified with the <code>label</code> attribute may be added beside the radio button.</p>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-semibold">Left stacked default</label>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="unstyled-radio-left" checked>
                                    Selected default
                                </label>
                            </div>

                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="unstyled-radio-left">
                                    Unselected default
                                </label>
                            </div>

                            <div class="form-check disabled">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" checked disabled>
                                    Disabled default
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="d-block font-weight-semibold">Left inline default</label>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="radio-unstyled-inline-left" checked>
                                    Selected default
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="radio-unstyled-inline-left">
                                    Unselected default
                                </label>
                            </div>
                        </div>

                        <div class="form-group pt-2">
                            <label class="font-weight-semibold">Left stacked styled</label>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input-styled" name="stacked-radio-left" checked data-fouc>
                                    Selected styled
                                </label>
                            </div>

                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input-styled" name="stacked-radio-left" data-fouc>
                                    Unselected styled
                                </label>
                            </div>

                            <div class="form-check disabled">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input-styled" disabled data-fouc>
                                    Disabled styled
                                </label>
                            </div>
                        </div>

                        <div class="form-group mb-3 mb-md-2">
                            <label class="d-block font-weight-semibold">Left inline styled</label>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input-styled" name="radio-inline-left" checked data-fouc>
                                    Selected styled
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input-styled" name="radio-inline-left" data-fouc>
                                    Unselected styled
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-semibold">Right stacked default</label>
                            <div class="form-check form-check-right">
                                <label class="form-check-label">
                                    Selected default
                                    <input type="radio" class="form-check-input" name="unstyled-radio-right" checked>
                                </label>
                            </div>

                            <div class="form-check form-check-right">
                                <label class="form-check-label">
                                    Unselected default
                                    <input type="radio" class="form-check-input" name="unstyled-radio-right">
                                </label>
                            </div>

                            <div class="form-check form-check-right disabled">
                                <label class="form-check-label">
                                    Disabled default
                                    <input type="radio" class="form-check-input" checked disabled>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="d-block font-weight-semibold">Right inline default</label>
                            <div class="form-check form-check-inline form-check-right">
                                <label class="form-check-label">
                                    Selected default
                                    <input type="radio" class="form-check-input" name="radio-unstyled-inline-right" checked>
                                </label>
                            </div>

                            <div class="form-check form-check-inline form-check-right">
                                <label class="form-check-label">
                                    Unselected default
                                    <input type="radio" class="form-check-input" name="radio-unstyled-inline-right">
                                </label>
                            </div>
                        </div>

                        <div class="form-group pt-2">
                            <label class="font-weight-semibold">Right stacked styled</label>
                            <div class="form-check form-check-right">
                                <label class="form-check-label">
                                    Selected styled
                                    <input type="radio" class="form-check-input-styled" name="stacked-radio-right" checked data-fouc>
                                </label>
                            </div>

                            <div class="form-check form-check-right">
                                <label class="form-check-label">
                                    Unselected styled
                                    <input type="radio" class="form-check-input-styled" name="stacked-radio-right" data-fouc>
                                </label>
                            </div>

                            <div class="form-check form-check-right disabled">
                                <label class="form-check-label">
                                    Disabled styled
                                    <input type="radio" class="form-check-input-styled" checked disabled data-fouc>
                                </label>
                            </div>
                        </div>

                        <div class="form-group mb-3 mb-md-2">
                            <label class="d-block font-weight-semibold">Right inline styled</label>
                            <div class="form-check form-check-inline form-check-right">
                                <label class="form-check-label">
                                    Selected styled
                                    <input type="radio" class="form-check-input-styled" name="radio-inline-right" checked data-fouc>
                                </label>
                            </div>

                            <div class="form-check form-check-inline form-check-right">
                                <label class="form-check-label">
                                    Unselected styled
                                    <input type="radio" class="form-check-input-styled" name="radio-inline-right" data-fouc>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /radio buttons -->


        <!-- Custom Bootstrap inputs -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Custom Bootstrap inputs</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <p class="mb-3">For even more customization and cross browser consistency, use our completely custom form elements to replace the browser defaults. They’re built on top of semantic and accessible markup, so they’re solid replacements for any default form control. Custom checkboxes can also utilize the <code>:indeterminate</code> pseudo class when manually set via JavaScript (there is no available HTML attribute for specifying it).</p>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="d-block font-weight-semibold">Left stacked checkboxes</label>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_unchecked" checked>
                                <label class="custom-control-label" for="custom_checkbox_stacked_unchecked">Custom checked</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked">
                                <label class="custom-control-label" for="custom_checkbox_stacked_checked">Custom unchecked</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked_disabled" checked disabled>
                                <label class="custom-control-label" for="custom_checkbox_stacked_checked_disabled">Custom checked disabled</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="d-block font-weight-semibold">Left inline checkboxes</label>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="custom_checkbox_inline_unchecked" checked>
                                <label class="custom-control-label" for="custom_checkbox_inline_unchecked">Custom checked</label>
                            </div>

                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="custom_checkbox_inline_checked">
                                <label class="custom-control-label" for="custom_checkbox_inline_checked">Custom unchecked</label>
                            </div>
                        </div>

                        <div class="form-group pt-2">
                            <label class="d-block font-weight-semibold">Left stacked radios</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="custom-stacked-radio" id="custom_radio_stacked_unchecked" checked>
                                <label class="custom-control-label" for="custom_radio_stacked_unchecked">Custom selected</label>
                            </div>

                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="custom-stacked-radio" id="custom_radio_stacked_checked">
                                <label class="custom-control-label" for="custom_radio_stacked_checked">Custom unselected</label>
                            </div>

                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="custom_radio_stacked_checked_disabled" checked disabled>
                                <label class="custom-control-label" for="custom_radio_stacked_checked_disabled">Custom selected disabled</label>
                            </div>
                        </div>

                        <div class="form-group mb-3 mb-md-2">
                            <label class="d-block font-weight-semibold">Left inline radios</label>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="custom-inline-radio" id="custom_radio_inline_unchecked" checked>
                                <label class="custom-control-label" for="custom_radio_inline_unchecked">Custom selected</label>
                            </div>

                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="custom-inline-radio" id="custom_radio_inline_checked">
                                <label class="custom-control-label" for="custom_radio_inline_checked">Custom unselected</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="d-block font-weight-semibold">Right stacked checkboxes</label>
                            <div class="custom-control custom-control-right custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_right_checked" checked>
                                <label class="custom-control-label position-static" for="custom_checkbox_stacked_right_checked">Custom checked</label>
                            </div>

                            <div class="custom-control custom-control-right custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_right_unchecked">
                                <label class="custom-control-label position-static" for="custom_checkbox_stacked_right_unchecked">Custom unchecked</label>
                            </div>

                            <div class="custom-control custom-control-right custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_right_checked_disabled" checked disabled>
                                <label class="custom-control-label position-static" for="custom_checkbox_stacked_right_checked_disabled">Custom checked disabled</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="d-block font-weight-semibold">Right inline checkboxes</label>
                            <div class="custom-control custom-control-right custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="custom_checkbox_inline_right_checked" checked>
                                <label class="custom-control-label position-static" for="custom_checkbox_inline_right_checked">Custom checked</label>
                            </div>

                            <div class="custom-control custom-control-right custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="custom_checkbox_inline_right_unchecked">
                                <label class="custom-control-label position-static" for="custom_checkbox_inline_right_unchecked">Custom unchecked</label>
                            </div>
                        </div>

                        <div class="form-group pt-2">
                            <label class="d-block font-weight-semibold">Right stacked radios</label>
                            <div class="custom-control custom-control-right custom-radio">
                                <input type="radio" class="custom-control-input" name="custom-stacked-radio-right" id="custom_radio_stacked_right_checked" checked>
                                <label class="custom-control-label position-static" for="custom_radio_stacked_right_checked">Custom selected</label>
                            </div>

                            <div class="custom-control custom-control-right custom-radio">
                                <input type="radio" class="custom-control-input" name="custom-stacked-radio-right" id="custom_radio_stacked_right_unchecked">
                                <label class="custom-control-label position-static" for="custom_radio_stacked_right_unchecked">Custom unselected</label>
                            </div>

                            <div class="custom-control custom-control-right custom-radio">
                                <input type="radio" class="custom-control-input" id="custom_radio_stacked_right_checked_disabled" checked disabled>
                                <label class="custom-control-label position-static" for="custom_radio_stacked_right_checked_disabled">Custom selected disabled</label>
                            </div>
                        </div>

                        <div class="form-group mb-3 mb-md-2">
                            <label class="d-block font-weight-semibold">Right stacked radios</label>
                            <div class="custom-control custom-control-right custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="custom-inline-radio-right" id="custom_radio_inline_right_checked" checked>
                                <label class="custom-control-label position-static" for="custom_radio_inline_right_checked">Custom selected</label>
                            </div>

                            <div class="custom-control custom-control-right custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="custom-inline-radio-right" id="custom_radio_inline_right_unchecked">
                                <label class="custom-control-label position-static" for="custom_radio_inline_right_unchecked">Custom unselected</label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /custom Bootstrap inputs -->


        <!-- Colors -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Color options</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <p class="mb-3">Besides default color, both checkboxes and radio buttons support 5 additional contextual color classes and other custom colors from color system. Colors are adapted to use in different background colors of parent elements - dropdown menus, active list states, input group addons - all checkboxes and radios are white on dark backgrounds. To use, simply add <code>background</code> and <code>text</code> color classes to Uniform's <code>wrapperClass</code> options.</p>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3 mb-md-2">
                            <label class="font-weight-semibold">Checkboxes</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input-styled-primary" checked data-fouc>
                                            Primary checkbox
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input-styled-danger" checked data-fouc>
                                            Danger checkbox
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input-styled-success" checked data-fouc>
                                            Success checkbox
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input-styled-warning" checked data-fouc>
                                            Warning checkbox
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input-styled-info" checked data-fouc>
                                            Info checkbox
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input-styled-custom" checked data-fouc>
                                            Custom color
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-3 mb-md-2">
                            <label class="font-weight-semibold">Radio buttons</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="radio-styled-color" class="form-check-input-styled-primary" checked data-fouc>
                                            Primary radio
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="radio-styled-color" class="form-check-input-styled-danger" data-fouc>
                                            Danger radio
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="radio-styled-color" class="form-check-input-styled-success" data-fouc>
                                            Success radio
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="radio-styled-color" class="form-check-input-styled-warning" data-fouc>
                                            Warning radio
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="radio-styled-color" class="form-check-input-styled-info" data-fouc>
                                            Info radio
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="radio-styled-color" class="form-check-input-styled-custom" data-fouc>
                                            Custom color
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /colors -->


        <!-- Switchery toggles -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Switchery toggles</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="font-weight-semibold">Default switchers</h6>
                        <p class="mb-3">You can add as many switches as you like, as long as their corresponding checkboxes have the same class. Select them and make new instance of the Switchery class for every of them.</p>

                        <div class="form-check form-check-switchery">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input-switchery" checked data-fouc>
                                Checked switch
                            </label>
                        </div>

                        <div class="form-check form-check-switchery">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input-switchery" data-fouc>
                                Unchecked switch
                            </label>
                        </div>

                        <div class="form-check form-check-switchery disabled">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input-switchery" checked disabled data-fouc>
                                Checked disabled
                            </label>
                        </div>

                        <div class="form-check form-check-switchery disabled">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input-switchery" disabled data-fouc>
                                Unchecked disabled
                            </label>
                        </div>


                        <h6 class="font-weight-semibold pt-3">Switcher colors</h6>
                        <p class="mb-3">You can change the default color of the switch to fit your design perfectly. According to the color system, any of its color can be applied to the switchery. Custom colors are also supported.</p>

                        <div class="form-check form-check-switchery">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input-switchery-primary" checked data-fouc>
                                Switch in <span class="font-weight-semibold">primary</span> context
                            </label>
                        </div>

                        <div class="form-check form-check-switchery">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input-switchery-danger" checked data-fouc>
                                Switch in <span class="font-weight-semibold">danger</span> context
                            </label>
                        </div>

                        <div class="form-check form-check-switchery">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input-switchery-info" checked data-fouc>
                                Switch in <span class="font-weight-semibold">info</span> context
                            </label>
                        </div>

                        <div class="form-check form-check-switchery">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input-switchery-warning" checked data-fouc>
                                Switch in <span class="font-weight-semibold">warning</span> context
                            </label>
                        </div>


                        <h6 class="font-weight-semibold pt-3">Left inline</h6>
                        <p class="mb-3">Switchery component also supports default option for <strong>left</strong> and <strong>right</strong> inline alignment. Just add <code>.form-check-inline</code> class to <code>.form-check-switchery</code> container. Default alignment is <strong>left</strong>.</p>

                        <div class="form-check form-check-switchery form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input-switchery" checked data-fouc>
                                First input
                            </label>
                        </div>

                        <div class="form-check form-check-switchery form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input-switchery" checked data-fouc>
                                Second input
                            </label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h6 class="font-weight-semibold pt-3 pt-md-0">Sticked to the right</h6>
                        <p class="mb-3">Sometimes it's very useful to have switches on the right side of the container. Just add <code>.form-check-right</code> class to the <code>&lt;.form-check></code> container for the very right side switcher alignment.</p>

                        <div class="form-check form-check-right form-check-switchery">
                            <label class="form-check-label">
                                Checked switch
                                <input type="checkbox" class="form-check-input-switchery" checked data-fouc>
                            </label>
                        </div>

                        <div class="form-check form-check-right form-check-switchery">
                            <label class="form-check-label">
                                Unchecked switch
                                <input type="checkbox" class="form-check-input-switchery" data-fouc>
                            </label>
                        </div>

                        <div class="form-check form-check-right form-check-switchery disabled">
                            <label class="form-check-label">
                                Checked disabled
                                <input type="checkbox" class="form-check-input-switchery" checked disabled data-fouc>
                            </label>
                        </div>

                        <div class="form-check form-check-right form-check-switchery disabled">
                            <label class="form-check-label">
                                Unchecked disabled
                                <input type="checkbox" class="form-check-input-switchery" disabled data-fouc>
                            </label>
                        </div>


                        <h6 class="font-weight-semibold pt-3">Multiple labels</h6>
                        <p class="mb-3">Switchery can be used with single label or with multiple labels. To use, add <code>.switchery-double</code> class to the container. All sizing options are available for this switchery type as well.</p>

                        <div class="form-check form-check-switchery form-check-switchery-double">
                            <label class="form-check-label">
                                Enable
                                <input type="checkbox" class="form-check-input-switchery" checked data-fouc>
                                Disable
                            </label>
                        </div>

                        <div class="form-check form-check-switchery form-check-switchery-double">
                            <label class="form-check-label">
                                Enable
                                <input type="checkbox" class="form-check-input-switchery" data-fouc>
                                Disable
                            </label>
                        </div>

                        <div class="form-check form-check-switchery form-check-switchery-double disabled">
                            <label class="form-check-label">
                                Enable
                                <input type="checkbox" class="form-check-input-switchery" checked disabled data-fouc>
                                Disable
                            </label>
                        </div>

                        <div class="form-check form-check-switchery form-check-switchery-double disabled">
                            <label class="form-check-label">
                                Enable
                                <input type="checkbox" class="form-check-input-switchery" disabled data-fouc>
                                Disable
                            </label>
                        </div>


                        <h6 class="font-weight-semibold pt-3">Right inline</h6>
                        <p class="mb-3">You can also reverse inline alignment to <code>right</code> - just add default <code>.form-check-right</code> to any <code>.form-check</code> container and all inputs will be adjusted automatically.</p>

                        <div class="form-check form-check-switchery form-check-inline form-check-right">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input-switchery" checked data-fouc>
                                First input
                            </label>
                        </div>

                        <div class="form-check form-check-switchery form-check-inline form-check-right">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input-switchery" checked data-fouc>
                                Second input
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /switchery toggles -->


        <!-- Bootstrap switch -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Bootstrap switch</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Switch states</h6>
                            <p>By default Bootstrap Switch supports standard attributes for checkboxes such as <code>disabled</code>, <code>checked</code> and <code>readonly</code> or use <code>true</code> or <code>false</code> in plugin options.</p>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check form-check-switch form-check-switch-left">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input form-check-input-switch" data-on-text="On" data-off-text="Off" checked>
                                            Checked switch
                                        </label>
                                    </div>

                                    <div class="form-check form-check-switch form-check-switch-left disabled">
                                        <label class="form-check-label">
                                            <input type="checkbox" data-on-text="On" data-off-text="Off" class="form-check-input form-check-input-switch" checked disabled>
                                            Checked disabled
                                        </label>
                                    </div>

                                    <div class="form-check form-check-switch form-check-switch-left">
                                        <label class="form-check-label">
                                            <input type="checkbox" data-on-text="On" data-off-text="Off" class="form-check-input form-check-input-switch" readonly checked>
                                            Checked readonly
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-check form-check-switch form-check-switch-left">
                                        <label class="form-check-label">
                                            <input type="checkbox" data-on-text="On" data-off-text="Off" class="form-check-input form-check-input-switch">
                                            Unchecked switch
                                        </label>
                                    </div>

                                    <div class="form-check form-check-switch form-check-switch-left disabled">
                                        <label class="form-check-label">
                                            <input type="checkbox" data-on-text="On" data-off-text="Off" class="form-check-input form-check-input-switch" disabled>
                                            Unchecked disabled
                                        </label>
                                    </div>

                                    <div class="form-check form-check-switch form-check-switch-left">
                                        <label class="form-check-label">
                                            <input type="checkbox" data-on-text="On" data-off-text="Off" class="form-check-input form-check-input-switch" readonly>
                                            Unchecked readonly
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Switch colors</h6>
                            <p>You can change the default color of the switch by choosing one of 6 predefined classes and use them in <code>data-on-color</code> and <code>data-off-color</code> attributes.</p>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-check form-check-switch form-check-switch-left">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input type="checkbox" class="form-check-input form-check-input-switch" data-on-text="On" data-off-text="Off" data-on-color="default" data-off-color="danger" checked>
                                            Default color
                                        </label>
                                    </div>

                                    <div class="form-check form-check-switch form-check-switch-left">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input type="checkbox" class="form-check-input form-check-input-switch" data-on-text="On" data-off-text="Off" data-on-color="primary" data-off-color="default" checked>
                                            Primary color
                                        </label>
                                    </div>

                                    <div class="form-check form-check-switch form-check-switch-left">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input type="checkbox" class="form-check-input form-check-input-switch" data-on-text="On" data-off-text="Off" data-on-color="danger" data-off-color="default" checked>
                                            Danger color
                                        </label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-check form-check-switch form-check-switch-left">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input type="checkbox" class="form-check-input form-check-input-switch" data-on-text="On" data-off-text="Off" data-on-color="success" data-off-color="default" checked>
                                            Success color
                                        </label>
                                    </div>

                                    <div class="form-check form-check-switch form-check-switch-left">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input type="checkbox" class="form-check-input form-check-input-switch" data-on-text="On" data-off-text="Off" data-on-color="warning" data-off-color="default" checked>
                                            Warning color
                                        </label>
                                    </div>

                                    <div class="form-check form-check-switch form-check-switch-left">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input type="checkbox" class="form-check-input form-check-input-switch" data-on-text="On" data-off-text="Off" data-on-color="info" data-off-color="default" checked>
                                            Info color
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h6 class="font-weight-semibold">Switch sizes</h6>
                            <p>Default height is equal to input field height, but you can also choose one of 4 available sizes (large, small and mini) by changing <code>data-size</code> attribute.</p>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check form-check-switch form-check-switch-left">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input type="checkbox" class="form-check-input-switch" data-on-text="On" data-off-text="Off" data-size="large" checked>
                                            Large switch
                                        </label>
                                    </div>

                                    <div class="form-check form-check-switch form-check-switch-left">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input type="checkbox" data-on-text="On" data-off-text="Off" class="form-check-input-switch" data-size="small" checked>
                                            Small switch
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-check form-check-switch form-check-switch-left">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input type="checkbox" data-on-text="On" data-off-text="Off" class="form-check-input-switch" checked>
                                            Default switch
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <h6 class="font-weight-semibold">Label options</h6>
                            <p>Labels support any text or icon via <code>data-on-text</code> and <code>data-off-text</code> attributes. If no custom text specified, switch will display default on/off text.</p>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check form-check-switch form-check-switch-left">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input type="checkbox" data-off-color="danger" data-on-text="Yes" data-off-text="No" class="form-check-input-switch" checked>
                                            Default text
                                        </label>
                                    </div>

                                    <div class="form-check form-check-switch form-check-switch-left">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input type="checkbox" data-on-color="warning" data-off-color="info" data-on-text="<i class='icon-link'></i>" data-off-text="<i class='icon-unlink'></i>" class="form-check-input-switch" checked>
                                            Icons only
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-check form-check-switch form-check-switch-left">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input type="checkbox" data-on-color="danger" data-off-color="primary" data-on-text="Enable" data-off-text="Disable" class="form-check-input-switch" checked>
                                            Enable/Disable
                                        </label>
                                    </div>

                                    <div class="form-check form-check-switch form-check-switch-left">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input type="checkbox" data-on-color="success" data-off-color="danger" data-on-text="Online" data-off-text="Offline" class="form-check-input-switch" checked>
                                            Online/Offline
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /bootstrap switch -->

    </div>
    <!-- FIM form_checkboxes_radios -->














    <!-- INICIO form_select2 -->
    <div class="content">

        <!-- Select2 selects -->
        <div class="mb-3">
            <h6 class="mb-0 font-weight-semibold">
                Basic setup
            </h6>
            <span class="text-muted d-block">Examples with basic options</span>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Single select</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>Basic select</label>
                            <select class="form-control select" data-fouc>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="d-block">Fixed select width</label>
                            <select class="form-control select-fixed-single" data-fouc>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Select with search</label>
                            <select class="form-control select-search" data-fouc>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Select with placeholder</label>
                            <select data-placeholder="Select a State..." class="form-control select" data-fouc>
                                <option></option>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Select with icons</label>
                            <select data-placeholder="Select a state..." class="form-control select-icons" data-fouc>
                                <optgroup label="Services">
                                    <option value="wordpress2" data-icon="wordpress2">Wordpress</option>
                                    <option value="tumblr2" data-icon="tumblr2">Tumblr</option>
                                    <option value="stumbleupon" data-icon="stumbleupon">Stumble upon</option>
                                    <option value="pinterest2" data-icon="pinterest2">Pinterest</option>
                                    <option value="lastfm2" data-icon="lastfm2">Lastfm</option>
                                </optgroup>
                                <optgroup label="File types">
                                    <option value="pdf" data-icon="file-pdf">PDF</option>
                                    <option value="word" data-icon="file-word">Word</option>
                                    <option value="excel" data-icon="file-excel">Excel</option>
                                    <option value="openoffice" data-icon="file-openoffice">Open office</option>
                                </optgroup>
                                <optgroup label="Browsers">
                                    <option value="chrome" data-icon="chrome" selected>Chrome</option>
                                    <option value="firefox" data-icon="firefox">Firefox</option>
                                    <option value="safari" data-icon="safari">Safari</option>
                                    <option value="opera" data-icon="opera">Opera</option>
                                    <option value="IE" data-icon="IE">IE</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Disable items</label>
                            <select class="form-control select" data-fouc>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ" disabled>Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID" disabled>Idaho</option>
                                    <option value="WY" disabled>Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR" disabled>Arkansas</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY" disabled>Kentucky</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Disabled select</label>
                            <select class="form-control select" disabled data-fouc>
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Select background color</label>
                            <select class="form-control select" data-container-css-class="bg-teal-400" data-fouc>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Menu background color</label>
                            <select class="form-control select" data-dropdown-css-class="bg-teal-400" data-fouc>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Custom color</label>
                            <select class="form-control select" data-container-css-class="bg-indigo-400" data-dropdown-css-class="bg-indigo-400" data-fouc>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Custom border and text color</label>
                            <select class="form-control select" data-container-css-class="border-primary text-primary-700" data-dropdown-css-class="border-primary" data-fouc>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Multiple select</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>Multiple select</label>
                            <select multiple="multiple" class="form-control select" data-fouc>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ" selected>Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="IA" selected>Iowa</option>
                                    <option value="KS" selected>Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="d-block">Fixed width select</label>
                            <select multiple="multiple" class="form-control select-fixed-multiple" data-fouc>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ" selected>Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS" selected>Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>With placeholder</label>
                            <select data-placeholder="Select a State..." multiple="multiple" class="form-control select" data-fouc>
                                <option></option>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>With icons</label>
                            <select multiple="multiple" data-placeholder="Select a state..." class="form-control select-icons" data-fouc>
                                <optgroup label="Services">
                                    <option value="wordpress2" data-icon="wordpress2">Wordpress</option>
                                    <option value="tumblr2" data-icon="tumblr2">Tumblr</option>
                                    <option value="stumbleupon" data-icon="stumbleupon">Stumble upon</option>
                                    <option value="pinterest2" data-icon="pinterest2">Pinterest</option>
                                    <option value="lastfm2" data-icon="lastfm2">Lastfm</option>
                                </optgroup>
                                <optgroup label="File types">
                                    <option value="pdf" data-icon="file-pdf">PDF</option>
                                    <option value="word" data-icon="file-word">Word</option>
                                    <option value="excel" data-icon="file-excel">Excel</option>
                                    <option value="openoffice" data-icon="file-openoffice">Open office</option>
                                </optgroup>
                                <optgroup label="Browsers">
                                    <option value="chrome" data-icon="chrome" selected>Chrome</option>
                                    <option value="firefox" data-icon="firefox" selected>Firefox</option>
                                    <option value="safari" data-icon="safari" selected>Safari</option>
                                    <option value="opera" data-icon="opera">Opera</option>
                                    <option value="IE" data-icon="IE">IE</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Drag and drop sorting</label>
                            <select class="form-control select-multiple-drag" multiple="multiple" data-fouc>
                                <option value="AZ" selected>Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                                <option value="IL" selected>Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Disable menu items</label>
                            <select multiple="multiple" class="form-control select" data-fouc>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ" disabled>Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID" disabled>Idaho</option>
                                    <option value="WY" selected>Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR" selected>Arkansas</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY" disabled>Kentucky</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Disabled select</label>
                            <select multiple="multiple" class="form-control select" disabled data-fouc>
                                <option value="AZ" selected>Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID" selected>Idaho</option>
                                <option value="WY" selected>Wyoming</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Results background color</label>
                            <select multiple="multiple" class="form-control select" data-container-css-class="bg-teal-400" data-fouc>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ" selected>Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="IL" selected>Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS" selected>Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Menu background color</label>
                            <select multiple="multiple" class="form-control select" data-dropdown-css-class="bg-slate-700" data-fouc>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ" selected>Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="IL" selected>Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS" selected>Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Custom colors</label>
                            <select multiple="multiple" class="form-control select" data-container-css-class="bg-indigo-400" data-dropdown-css-class="bg-indigo-400" data-fouc>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ" selected>Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="IL" selected>Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS" selected>Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Custom border color</label>
                            <select multiple="multiple" class="form-control select" data-container-css-class="border-primary text-primary-700" data-dropdown-css-class="border-primary" data-fouc>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ" selected>Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="IL" selected>Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS" selected>Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /select2 selects -->


        <!-- Select2 sizing -->
        <div class="mb-3 pt-2">
            <h6 class="mb-0 font-weight-semibold">
                Select sizing
            </h6>
            <span class="text-muted d-block">Single and multiple selects sizing</span>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Single select sizing</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>Large select</label>
                            <select data-placeholder="Select a State..." class="form-control form-control-lg select" data-container-css-class="select-lg" data-fouc>
                                <option></option>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Default select</label>
                            <select data-placeholder="Select a State..." class="form-control select" data-fouc>
                                <option></option>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Small select</label>
                            <select data-placeholder="Select a State..." class="form-control form-control-sm select" data-container-css-class="select-sm" data-fouc>
                                <option></option>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Multiple select sizing</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>Large select</label>
                            <select multiple="multiple" data-placeholder="Select a State..." class="form-control form-control-lg select" data-container-css-class="select-lg" data-fouc>
                                <option></option>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID" selected>Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="IA" selected>Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Default select</label>
                            <select multiple="multiple" data-placeholder="Select a State..." class="form-control select" data-fouc>
                                <option></option>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ" selected>Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL" selected>Alabama</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Small select</label>
                            <select multiple="multiple" data-placeholder="Select a State..." class="form-control form-control-sm select" data-container-css-class="select-sm" data-fouc>
                                <option></option>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY" selected>Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY" selected>Kentucky</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /select2 sizing -->


        <!-- Select2 advanced -->
        <div class="mb-3 pt-2">
            <h6 class="mb-0 font-weight-semibold">
                Advanced usage
            </h6>
            <span class="text-muted d-block">More complex configurations</span>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Advanced single selects</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Minimum input</h6>
                            <p class="mb-2">Select2 supports a minimum input setting which is useful for large remote datasets where short search terms are not very useful. Simply specify a number of input characters using <code>minimumInputLength</code> option:</p>

                            <select data-placeholder="Enter 'as'" class="form-control select-minimum" data-fouc>
                                <option></option>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Customizing how results are matched</h6>
                            <p class="mb-2">Example of how matched results can be customized. Unlike other dropdowns on this page, this one matches options only if the term appears in the beginning of the string as opposed to anywhere.</p>

                            <select class="form-control select-matched-customize" data-fouc>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Loading array data</h6>
                            <p class="mb-2">Select2 provides a way to load the data from a local array. You can provide initial selections with array data by providing the option tag for the selected values, similar to how it would be done for a standard select.</p>

                            <div class="mb-3">
                                <p>1. Example below loads array:</p>
                                <select class="form-control select-data-array" data-fouc></select>
                            </div>

                            <div class="mb-3">
                                <p>2. Example below loads array with selected option:</p>
                                <select class="form-control select-data-array" data-fouc>
                                    <option value="2" selected>duplicate</option>
                                </select>
                            </div>	
                        </div>

                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Loading remote data</h6>
                            <p class="mb-2">Select2 comes with AJAX support built in, using jQuery's AJAX methods. In this example, we can search for repositories using GitHub's API. Example also includes infinite scrolling feature:</p>

                            <select class="form-control select-remote-data" data-fouc>
                                <option value="3620194" selected>select2/select2</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Diacritics support in single select</h6>
                            <p class="mb-2">Select2's default matcher will ignore diacritics, making it easier for users to filter results in international selects. Type <strong>"aero"</strong> into the select below:</p>

                            <select data-placeholder="Type 'aero'" class="form-control select-search" data-fouc>
                                <option>Aeróbics</option>
                                <option>Aeróbics en Agua</option>
                                <option>Aerografía</option>
                                <option>Aeromodelaje</option>
                                <option>Águilas</option>
                                <option>Ajedrez</option>
                                <option>Ala Delta</option>
                                <option>Álbumes de Música</option>
                                <option>Alusivos</option>
                                <option>Análisis de Escritura a Mano</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Clearing results</h6>
                            <p class="mb-2">Whether or not a clear button is displayed when the select box has a selection. The button, when clicked, resets the value of the select box back to the placeholder.</p>

                            <select data-placeholder="Select a state" class="form-control select-clear" data-fouc>
                                <option></option>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL" selected>Alabama</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="mb-3">
                            <h6 class="font-weight-semibold">Programmatic access</h6>
                            <p class="mb-2">Select2 supports methods that allow programmatic control of the component: you can set and get single or multiple values, control menu visibility by opening and closing it, make the menu enabled or disabled.</p>

                            <div class="mb-3">
                                <p>1. Set and get value:</p>
                                <p class="mb-2">
                                    <select data-placeholder="Select something" class="form-control select-access-value" data-fouc>
                                        <option></option>
                                        <option value="CA">California</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="WY">Wyoming</option>
                                        <option value="CT">Connecticut</option>
                                    </select>
                                </p>

                                <button type="button" class="btn bg-blue access-set">Set to California</button>
                                <button type="button" class="btn bg-blue access-get">Alert selected value</button>
                            </div>

                            <div class="mb-3">
                                <p>2. Enable and disable menu:</p>
                                <p class="mb-2">
                                    <select data-placeholder="Select something" class="form-control select-access-enable" data-fouc>
                                        <option></option>
                                        <option value="CA">California</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="WY">Wyoming</option>
                                        <option value="CT">Connecticut</option>
                                    </select>
                                </p>

                                <button type="button" class="btn bg-danger-400 access-disable">Disable</button>
                                <button type="button" class="btn bg-danger-400 access-enable">Enable</button>
                            </div>

                            <div class="mb-3">
                                <p>3. Destroy and create menu:</p>
                                <p class="mb-2">
                                    <select data-placeholder="Select something" class="form-control select-access-create" data-fouc>
                                        <option></option>
                                        <option value="CA">California</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="WY">Wyoming</option>
                                        <option value="CT">Connecticut</option>
                                    </select>
                                </p>

                                <button type="button" class="btn bg-indigo-300 access-destroy">Destroy</button>
                                <button type="button" class="btn bg-indigo-300 access-create">Create</button>
                            </div>

                            <div>
                                <p>4. Open and close menu:</p>
                                <p class="mb-2">
                                    <select data-placeholder="Select something" class="form-control select-access-open" data-fouc>
                                        <option></option>
                                        <option value="CA">California</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="WY">Wyoming</option>
                                        <option value="CT">Connecticut</option>
                                    </select>
                                </p>

                                <button type="button" class="btn bg-teal-400 access-open">Open</button>
                                <button type="button" class="btn bg-teal-400 access-close">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Advanced multiple selects</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Tagging support</h6>
                            <p class="mb-2">Select2 can be used to quickly set up fields used for tagging. When tagging is enabled the user can select from pre-existing tags or create a new tag by picking the first choice.</p>

                            <select class="form-control select-multiple-tags" multiple="multiple" data-fouc>
                                <option value="AZ">Arizona</option>
                                <option value="CO" selected>Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                                <option value="AL" selected>Alabama</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Maximum input length</h6>
                            <p class="mb-2">Select2 can be set a limit on the number of characters that can be entered per tag. You would not be able to enter any input of more than 5 characters long.</p>

                            <select class="form-control select-multiple-maximum-length" multiple="multiple" data-fouc>
                                <option value="AZ">Arizona</option>
                                <option value="CO" selected>Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                                <option value="AL" selected>Alabama</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Auto tokenization</h6>
                            <p class="mb-2">Select2 supports ability to add choices automatically as the user is typing into the search field. Try typing in the search field below and entering a space or a comma.</p>

                            <select class="form-control select-multiple-tokenization" multiple="multiple" data-fouc>
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                                <option value="AL" selected>Alabama</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Limiting the number of selections</h6>
                            <p class="mb-2">Select2 multi-value select boxes can set restrictions regarding the maximum number of options selected. The select below is declared with <code>maximumSelectionLength</code> option.</p>

                            <select class="form-control select-multiple-limited" multiple="multiple" data-fouc>
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                                <option value="AL">Alabama</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY" selected>Kentucky</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Diacritics support in multiple select</h6>
                            <p class="mb-2">Select2's default matcher will ignore diacritics, making it easier for users to filter results in international selects. Type <strong>"aero"</strong> into the select below:</p>

                            <select data-placeholder="Type 'aero'" multiple="multiple" class="form-control select" data-fouc>
                                <option>Aeróbics</option>
                                <option>Aeróbics en Agua</option>
                                <option>Aerografía</option>
                                <option>Aeromodelaje</option>
                                <option>Águilas</option>
                                <option>Ajedrez</option>
                                <option>Ala Delta</option>
                                <option>Álbumes de Música</option>
                                <option>Alusivos</option>
                                <option>Análisis de Escritura a Mano</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <h6 class="font-weight-semibold">Programmatic access</h6>
                            <p class="mb-2">Select2 supports methods that allow programmatic control of the component: you can set and get single or multiple values, control menu visibility by opening and closing it, make the menu enabled or disabled.</p>

                            <div class="mb-3">
                                <p>1. Reacting to external value changes:</p>
                                <p class="mb-2">
                                    <select data-placeholder="Select something" multiple="multiple" class="form-control select-access-multiple-value" data-fouc>
                                        <option value="AK">Alaska</option>
                                        <option value="CA">California</option>
                                        <option value="AZ" selected>Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="WY" selected>Wyoming</option>
                                        <option value="CT">Connecticut</option>
                                    </select>
                                </p>

                                <button type="button" class="btn bg-blue change-to-ca">Select California</button>
                                <button type="button" class="btn bg-blue change-to-ak-co">Select Alaska and Colorado</button>
                            </div>

                            <div class="mb-3">
                                <p>2. Enable and disable menu:</p>
                                <p class="mb-2">
                                    <select data-placeholder="Select something" multiple="multiple" class="form-control select-access-multiple-enable" data-fouc>
                                        <option value="AK">Alaska</option>
                                        <option value="CA">California</option>
                                        <option value="AZ" selected>Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="WY" selected>Wyoming</option>
                                        <option value="CT">Connecticut</option>
                                    </select>
                                </p>

                                <button type="button" class="btn bg-danger-400 access-multiple-disable">Disable</button>
                                <button type="button" class="btn bg-danger-400 access-multiple-enable">Enable</button>
                            </div>

                            <div class="mb-3">
                                <p>3. Destroy and create menu:</p>
                                <p class="mb-2">
                                    <select data-placeholder="Select something" multiple="multiple" class="form-control select-access-multiple-create" data-fouc>
                                        <option value="AK">Alaska</option>
                                        <option value="CA">California</option>
                                        <option value="AZ" selected>Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="WY" selected>Wyoming</option>
                                        <option value="CT">Connecticut</option>
                                    </select>
                                </p>

                                <button type="button" class="btn bg-indigo-300 access-multiple-destroy">Destroy</button>
                                <button type="button" class="btn bg-indigo-300 access-multiple-create">Create</button>
                            </div>

                            <div class="mb-3">
                                <p>4. Clear selection:</p>
                                <p class="mb-2">
                                    <select data-placeholder="Select states" multiple="multiple" class="form-control select-access-multiple-clear" data-fouc>
                                        <option value="AK">Alaska</option>
                                        <option value="CA">California</option>
                                        <option value="AZ" selected>Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="WY" selected>Wyoming</option>
                                        <option value="CT">Connecticut</option>
                                    </select>
                                </p>

                                <button type="button" class="btn bg-brown-400 access-multiple-clear">Clear selection</button>
                            </div>

                            <div>
                                <p>5. Open and close menu:</p>
                                <p class="mb-2">
                                    <select data-placeholder="Select something" multiple="multiple" class="form-control select-access-multiple-open" data-fouc>
                                        <option value="AK">Alaska</option>
                                        <option value="CA">California</option>
                                        <option value="AZ" selected>Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="WY" selected>Wyoming</option>
                                        <option value="CT">Connecticut</option>
                                    </select>
                                </p>

                                <button type="button" class="btn bg-teal-400 access-multiple-open">Open</button>
                                <button type="button" class="btn bg-teal-400 access-multiple-close">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /select2 advanced -->          

    </div>

    <!-- FIM form_select2 -->








    <!-- INICIO form_multiselect -->
    <div class="content">

        <!-- Multiselect examples -->
        <div class="mb-3">
            <h6 class="mb-0 font-weight-semibold">
                Basic examples
            </h6>
            <span class="text-muted d-block">Different multiselect options</span>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Basic examples</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <!-- Default multiselect -->
                        <div class="form-group">
                            <label>Default select</label>
                            <select class="form-control multiselect" multiple="multiple" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                            </select>
                        </div>
                        <!-- /default multiselect -->


                        <!-- Default multiselect with selected options -->
                        <div class="form-group">
                            <label>Default selected options</label>
                            <select class="form-control multiselect" multiple="multiple" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes" selected>Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms" selected>Mushrooms</option>
                            </select>
                        </div>
                        <!-- /default multiselect with selected options -->


                        <!-- Options with divider -->
                        <div class="form-group">
                            <label>Options with divider</label>
                            <select class="form-control multiselect" multiple="multiple" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option data-role="divider"></option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                            </select>
                        </div>
                        <!-- /options with divider -->


                        <!-- Option groups support -->
                        <div class="form-group">
                            <label>Option groups support</label>
                            <select class="form-control multiselect" multiple="multiple" data-fouc>
                                <optgroup label="Mathematics">
                                    <option value="analysis">Analysis</option>
                                    <option value="algebra">Linear Algebra</option>
                                    <option value="discrete">Discrete Mathematics</option>
                                </optgroup>
                                <optgroup label="Computer Science">
                                    <option value="programming">Introduction to Programming</option>
                                    <option value="complexity">Complexity Theory</option>
                                    <option value="software">Software Engineering</option>
                                </optgroup>
                            </select>
                        </div>
                        <!-- /option groups support -->


                        <!-- Options with and without groups -->
                        <div class="form-group">
                            <label>Options with and without groups</label>
                            <select class="form-control multiselect" multiple="multiple" data-fouc>
                                <option value="lab">Lab Course</option>
                                <option value="proseminar">Proseminar</option>
                                <optgroup label="Mathematics">
                                    <option value="analysis">Analysis</option>
                                    <option value="algebra">Linear Algebra</option>
                                    <option value="probability">Probability Theory</option>
                                </optgroup>
                                <optgroup label="Computer Science">
                                    <option value="programming">Introduction to Programming</option>
                                    <option value="automata">Automata Theory</option>
                                    <option value="software">Software Engineering</option>
                                </optgroup>
                            </select>
                        </div>
                        <!-- /options with and without groups -->


                        <!-- Dropdown with max height -->
                        <div class="form-group">
                            <label>Dropdown with max height</label>
                            <select class="form-control multiselect-max-height" multiple="multiple" data-fouc>
                                <optgroup label="Mathematics">
                                    <option value="analysis">Analysis</option>
                                    <option value="algebra">Linear Algebra</option>
                                    <option value="discrete">Discrete Mathematics</option>
                                </optgroup>
                                <optgroup label="Computer Science">
                                    <option value="programming">Introduction to Programming</option>
                                    <option value="complexity">Complexity Theory</option>
                                    <option value="software">Software Engineering</option>
                                </optgroup>
                            </select>
                        </div>
                        <!-- /dropdown with max height -->


                        <!-- Select All option -->
                        <div class="form-group">
                            <label>With <span class="font-weight-semibold">Select all</span> option</label>
                            <select class="form-control multiselect-select-all" multiple="multiple" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                            </select>
                        </div>
                        <!-- /select All option -->


                        <!-- Select All option selected -->
                        <div class="form-group">
                            <label>Select all option response</label>
                            <select class="form-control multiselect-select-all" multiple="multiple" data-fouc>
                                <option value="cheese" selected>Cheese</option>
                                <option value="tomatoes" selected>Tomatoes</option>
                                <option value="mozarella" selected>Mozzarella</option>
                                <option value="mushrooms" selected>Mushrooms</option>
                            </select>
                        </div>
                        <!-- /select All option selected -->


                        <!-- Filtering options -->
                        <div class="form-group">
                            <label><span class="font-weight-semibold">Filtering</span> option</label>
                            <select class="form-control multiselect-filtering" multiple="multiple" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                            </select>
                        </div>
                        <!-- /filtering options -->


                        <!-- Select All and filtering options -->
                        <div class="form-group">
                            <label><span class="font-weight-semibold">Select All</span> and <span class="font-weight-semibold">Filtering</span> options</label>
                            <select class="form-control multiselect-select-all-filtering" multiple="multiple" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                            </select>
                        </div>
                        <!-- /select All and filtering options -->


                        <!-- Optgroups, filtering and select all -->
                        <div class="form-group">
                            <label>Full featured example</label>
                            <select class="form-control multiselect-full-featured" multiple="multiple" data-fouc>
                                <option value="lab">Lab Course</option>
                                <option value="proseminar">Proseminar</option>
                                <optgroup label="Mathematics">
                                    <option value="analysis">Analysis</option>
                                    <option value="algebra">Linear Algebra</option>
                                    <option value="probability">Probability Theory</option>
                                </optgroup>
                                <optgroup label="Computer Science">
                                    <option value="programming">Introduction to Programming</option>
                                    <option value="complexity">Complexity Theory</option>
                                    <option value="software">Software Engineering</option>
                                </optgroup>
                            </select>
                        </div>
                        <!-- /optgroups, filtering and select all -->


                        <!-- Disabled select -->
                        <div class="form-group">
                            <label>Disabled select</label>
                            <select class="form-control multiselect" multiple="multiple" disabled data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                            </select>
                        </div>
                        <!-- /disabled select -->


                        <!-- Disabled options -->
                        <div class="form-group">
                            <label>Disabled options</label>
                            <select class="form-control multiselect" multiple="multiple" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes" disabled selected>Tomatoes</option>
                                <option value="mozarella" disabled>Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                            </select>
                        </div>
                        <!-- /disabled options -->


                        <!-- Disabled optgroups -->
                        <div class="form-group">
                            <label>Disabled optgroups</label>
                            <select class="form-control multiselect" multiple="multiple" data-fouc>
                                <optgroup label="Mathematics" disabled>
                                    <option value="analysis">Analysis</option>
                                    <option value="algebra">Linear Algebra</option>
                                    <option value="probability">Probability Theory</option>
                                </optgroup>
                                <optgroup label="Computer Science">
                                    <option value="programming">Introduction to Programming</option>
                                    <option value="complexity">Complexity Theory</option>
                                    <option value="software">Software Engineering</option>
                                </optgroup>
                            </select>
                        </div>
                        <!-- /disabled optgroups -->


                        <!-- Prevent deselect -->
                        <div class="form-group">
                            <label>Prevent deselect</label>
                            <select class="form-control multiselect-prevent-deselect" multiple="multiple" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                            </select>
                        </div>
                        <!-- /prevent deselect -->

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Advanced usage</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <!-- Within a group with addon -->
                        <div class="form-group">
                            <label>Within a group with addon</label>
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-android"></i>
                                    </span>
                                </span>

                                <select class="form-control multiselect" multiple="multiple" data-fouc>
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                </select>
                            </div>									
                        </div>
                        <!-- /within a group with addon -->


                        <!-- Within a group with button -->
                        <div class="form-group">
                            <label>Within a group with button</label>
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <button class="btn btn-light" type="button">Action</button>
                                </span>
                                <select class="form-control multiselect" multiple="multiple" data-fouc>
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                </select>
                            </div>									
                        </div>
                        <!-- /within a group with button -->


                        <!-- Within a group with button dropdown -->
                        <div class="form-group">
                            <label>Within a group with button dropdown</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">Action</button>
                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item">Action</a>
                                        <a href="#" class="dropdown-item">Another action</a>
                                        <a href="#" class="dropdown-item">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">One more separated line</a>
                                    </div>
                                </div>

                                <select class="form-control multiselect" multiple="multiple" data-fouc>
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                </select>
                            </div>									
                        </div>
                        <!-- /within a group with button dropdown -->


                        <!-- Within a group with segmented button dropdown -->
                        <div class="form-group">
                            <label>Within a group with segmented button dropdown</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="button" class="btn btn-light">Action</button>
                                    <button type="button" class="btn btn-light btn-icon dropdown-toggle" data-toggle="dropdown"></button>
                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item">Action</a>
                                        <a href="#" class="dropdown-item">Another action</a>
                                        <a href="#" class="dropdown-item">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">One more separated line</a>
                                    </div>
                                </div>

                                <select class="form-control multiselect" multiple="multiple" data-fouc>
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                </select>
                            </div>									
                        </div>
                        <!-- /within a group with segmented button dropdown -->


                        <!-- Within a group with checkbox -->
                        <div class="form-group">
                            <label>Within a group with checkbox</label>
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" class="form-control-styled" name="input-addon-checkbox" checked data-fouc>
                                    </div>
                                </span>

                                <select class="form-control multiselect" multiple="multiple" data-fouc>
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                </select>
                            </div>									
                        </div>
                        <!-- /within a group with checkbox -->


                        <!-- Within a group with radio -->
                        <div class="form-group">
                            <label>Within a group with radio</label>
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" class="form-control-styled" name="input-addon-radio" checked data-fouc>
                                    </div>
                                </span>

                                <select class="form-control multiselect" multiple="multiple" data-fouc>
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                </select>
                            </div>									
                        </div>
                        <!-- /within a group with radio -->


                        <!-- Remove active option class -->
                        <div class="form-group">
                            <label>Remove active option class</label>
                            <select class="form-control multiselect-no-active-class" multiple="multiple" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes" selected>Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                            </select>
                        </div>
                        <!-- /remove active option class -->


                        <!-- Alternative labels for options -->
                        <div class="form-group">
                            <label>Alternative labels for options</label>
                            <select class="form-control multiselect" multiple="multiple" data-fouc>
                                <option value="analysis" label="An (Analysis)">Analysis</option>
                                <option value="algebra" label="LA (Linear Algebra)">Linear Algebra</option>
                                <option value="discrete" label="Discrete (Mathematics)">Discrete Mathematics</option>
                            </select>
                        </div>
                        <!-- /alternative labels for options -->


                        <!-- Limit options number -->
                        <div class="form-group">
                            <label>Limit options number</label>
                            <select class="form-control multiselect-number" multiple="multiple" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                            </select>
                        </div>
                        <!-- /limit options number -->


                        <!-- Custom empty text -->
                        <div class="form-group">
                            <label>Custom empty text</label>
                            <select class="form-control multiselect-nonselected-text" multiple="multiple" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                            </select>
                        </div>
                        <!-- /custom empty -->


                        <!-- As a link -->
                        <div class="form-group">
                            <label>As a link</label>
                            <select class="form-control multiselect-link" multiple="multiple" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                            </select>
                        </div>
                        <!-- /as a link -->


                        <!-- onChange notice -->
                        <div class="form-group">
                            <label>onChange notice</label>
                            <select class="form-control multiselect-onchange-notice" multiple="multiple" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                            </select>
                        </div>
                        <!-- /onChange notice -->


                        <!-- onChange desktop notification -->
                        <div class="form-group">
                            <label>onChange desktop notification</label>
                            <select class="form-control multiselect-onchange-desktop" multiple="multiple" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                            </select>
                        </div>
                        <!-- /onChange desktop notification -->


                        <!-- onDropdownShow event -->
                        <div class="form-group">
                            <label>onDropdownShow event</label>
                            <select class="form-control multiselect-show-event" multiple="multiple" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                            </select>
                        </div>
                        <!-- /onDropdownShow event -->


                        <!-- onDropdownHide event -->
                        <div class="form-group">
                            <label>onDropdownHide event</label>
                            <select class="form-control multiselect-hide-event" multiple="multiple" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                            </select>
                        </div>
                        <!-- /onDropdownHide event -->									

                    </div>
                </div>
            </div>
        </div>
        <!-- /multiselect examples -->


        <!-- Sizing options -->
        <div class="mb-3 mt-2">
            <h6 class="mb-0 font-weight-semibold">
                Sizing options
            </h6>
            <span class="text-muted d-block">Width and height sizing</span>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Width sizing</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <!-- Full width -->
                        <div class="form-group">
                            <label>Full width button (default)</label>
                            <select class="form-control multiselect" multiple="multiple" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                            </select>
                        </div>
                        <!-- /full width -->


                        <!-- Fixed width -->
                        <div class="form-group">
                            <label>Fixed width</label>
                            <select class="form-control multiselect" multiple="multiple" data-button-width="250" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                            </select>
                        </div>
                        <!-- /fixed width -->


                        <!-- Auto width -->
                        <div class="form-group">
                            <label>Auto width button (default)</label>
                            <select class="form-control multiselect" multiple="multiple" data-button-width="auto" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                            </select>
                        </div>
                        <!-- /auto width -->

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Height sizing</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <!-- Large button -->
                        <div class="form-group">
                            <label>Large select</label>
                            <select class="form-control form-control-lg multiselect" multiple="multiple" data-button-class="btn btn-light btn-lg" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                            </select>
                        </div>
                        <!-- /large button -->


                        <!-- Default button -->
                        <div class="form-group">
                            <label>Default select</label>
                            <select class="form-control multiselect" multiple="multiple" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                            </select>
                        </div>
                        <!-- /default button -->


                        <!-- Small button -->
                        <div class="form-group">
                            <label>Small select</label>
                            <select class="form-control form-control-sm multiselect" multiple="multiple" data-button-class="btn btn-light btn-sm" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                            </select>
                        </div>
                        <!-- /small button -->

                    </div>
                </div>
            </div>
        </div>
        <!-- /sizing options -->


        <!-- Color options -->
        <div class="mb-3 mt-2">
            <h6 class="mb-0 font-weight-semibold">
                Other options
            </h6>
            <span class="text-muted d-block">Contextual alternatives and other options</span>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Contextual alternatives</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <!-- Default -->
                        <div class="form-group">
                            <label>Default class</label>
                            <select class="form-control multiselect" multiple="multiple" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                            </select>
                        </div>
                        <!-- /default -->


                        <!-- Primary -->
                        <div class="form-group">
                            <label>Primary class</label>
                            <select class="form-control multiselect" multiple="multiple" data-button-class="btn bg-primary" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                            </select>
                        </div>
                        <!-- /primary -->


                        <!-- Danger -->
                        <div class="form-group">
                            <label>Danger class</label>
                            <select class="form-control multiselect" multiple="multiple" data-button-class="btn bg-danger" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                            </select>
                        </div>
                        <!-- /danger -->


                        <!-- Success -->
                        <div class="form-group">
                            <label>Success class</label>
                            <select class="form-control multiselect" multiple="multiple" data-button-class="btn bg-success" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                            </select>
                        </div>
                        <!-- /success -->


                        <!-- Warning -->
                        <div class="form-group">
                            <label>Warning class</label>
                            <select class="form-control multiselect" multiple="multiple" data-button-class="btn bg-warning" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                            </select>
                        </div>
                        <!-- /warning -->


                        <!-- Info -->
                        <div class="form-group">
                            <label>Info class</label>
                            <select class="form-control multiselect" multiple="multiple" data-button-class="btn bg-info" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                            </select>
                        </div>
                        <!-- /info -->

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Other options</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <!-- Single select -->
                        <div class="form-group">
                            <label>Single select</label>
                            <select class="form-control multiselect" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                            </select>
                        </div>
                        <!-- /single select -->


                        <!-- Clickable optgroups -->
                        <div class="form-group">
                            <label>Clickable optgroups</label>
                            <select class="form-control multiselect-clickable-groups" multiple="multiple" data-fouc>
                                <optgroup label="Mathematics">
                                    <option value="analysis">Analysis</option>
                                    <option value="algebra">Linear Algebra</option>
                                    <option value="discrete">Discrete Mathematics</option>
                                </optgroup>
                                <optgroup label="Computer Science">
                                    <option value="programming">Introduction to Programming</option>
                                    <option value="complexity">Complexity Theory</option>
                                    <option value="software">Software Engineering</option>
                                </optgroup>
                                <optgroup label="Physics">
                                    <option value="mechanics">Classical Mechanics</option>
                                    <option value="magnetism">Electromagnetism</option>
                                    <option value="quantum">Quantum Mechanics</option>
                                </optgroup>
                            </select>
                        </div>
                        <!-- /clickable optgroups -->


                        <!-- Disable if empty -->
                        <div class="form-group">
                            <label>Disable if no options are given</label>
                            <select class="form-control multiselect-disable-empty" multiple="multiple" data-fouc></select>
                        </div>
                        <!-- /disable if empty -->


                        <!-- Custom button color -->
                        <div class="form-group">
                            <label>Custom button color</label>
                            <select class="form-control multiselect" multiple="multiple" data-button-class="btn bg-teal-400" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                            </select>
                        </div>
                        <!-- /custom button color -->


                        <!-- Custom menu color -->
                        <div class="form-group">
                            <label>Custom menu color</label>
                            <select class="form-control multiselect-menu-bg-color" multiple="multiple" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                            </select>
                        </div>
                        <!-- /custom menu color -->


                        <!-- Custom colors -->
                        <div class="form-group">
                            <label>Custom colors combination</label>
                            <select class="form-control multiselect-combine-all" multiple="multiple" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                            </select>
                        </div>
                        <!-- /custom colors -->

                    </div>
                </div>
            </div>
        </div>
        <!-- /color options -->


        <!-- More complex examples -->
        <div class="mb-3 mt-2">
            <h6 class="mb-0 font-weight-semibold">
                Advanced examples
            </h6>
            <span class="text-muted d-block">More complex multiselect examples</span>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Further examples</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <!-- Showing values -->
                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Showing values</h6>
                            <p class="mb-3">Use "Select" and "Deselect" buttons to select or deselect cheese and tomatoes. Display selected or deselected options by using <code>$('.multiselect').val()</code> method.</p>

                            <div class="input-group">
                                <select class="form-control multiselect-display-values" multiple="multiple" data-fouc>
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>

                                <div class="input-group-append">
                                    <button type="button" class="btn btn-light multiselect-display-values-select">Select</button>
                                    <button type="button" class="btn btn-light multiselect-display-values-deselect">Deselect</button>
                                </div>
                            </div>

                            <div class="values-area mt-2"></div>
                        </div>
                        <!-- /showing values -->


                        <!-- Toggle selection -->
                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Toggle selection</h6>
                            <p class="mb-3">Use the button to toggle the selection. Don't forget to include <code>$.uniform.update();</code> to update checkboxes or radios state dynamically.</p>
                            <div class="input-group">
                                <select class="form-control multiselect-toggle-selection" multiple="multiple" data-fouc>
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>

                                <div class="input-group-append">
                                    <button type="button" class="btn btn-light multiselect-toggle-selection-button">Select All</button>
                                </div>
                            </div>
                        </div>
                        <!-- /toggle selection -->


                        <!-- Order options -->
                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Order options</h6>
                            <p class="mb-3">Record the order the options are selected. When selecting an item an ordering number will be incremented and saved within the option.</p>

                            <div class="input-group">
                                <select class="form-control multiselect-order-options" multiple="multiple" data-fouc>
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>

                                <div class="input-group-append">
                                    <button type="button" class="btn bg-blue multiselect-order-options-button">Order</button>
                                </div>
                            </div>
                        </div>
                        <!-- /order options -->


                        <!-- Simulate selections -->
                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Simulate selections</h6>
                            <p class="mb-3">Simulate single selections using checkboxes. The behavior will be similar to a multiselect with radio buttons.</p>

                            <select class="form-control multiselect-simulate-selections" multiple="multiple" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                                <option value="pepperoni">Pepperoni</option>
                                <option value="onions">Onions</option>
                            </select>
                        </div>
                        <!-- /simulate selections -->


                        <!-- Close dropdown automatically -->
                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Close dropdown automatically</h6>
                            <p class="mb-3">Close dropdown after 3 selections automatically.</p>

                            <select class="form-control multiselect-close-dropdown" multiple="multiple" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                                <option value="pepperoni">Pepperoni</option>
                                <option value="onions">Onions</option>
                            </select>
                        </div>
                        <!-- /close dropdown automatically -->


                        <!-- Reset button -->
                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Reset button</h6>
                            <p class="mb-3">Using a reset button together with a multiselect. Select options then click Reset button to reset selections.</p>

                            <form class="input-group" id="multiselect-reset-form">
                                <select class="form-control multiselect-reset" multiple="multiple" data-fouc>
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>

                                <div class="input-group-append">
                                    <button type="reset" class="btn bg-blue">Reset</button>
                                </div>
                            </form>
                        </div>
                        <!-- /reset button -->


                        <!-- Templates -->
                        <div class="mb-3">
                            <h6 class="font-weight-semibold">Multiselect templates</h6>
                            <p class="mb-3">The templates can be overriden using the <code>templates</code> configuration option. The example below uses a <code>red</code> border color for dividers.</p>

                            <select class="form-control multiselect-templates" multiple="multiple" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option data-role="divider"></option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                                <option data-role="divider"></option>
                                <option value="pepperoni">Pepperoni</option>
                                <option value="onions">Onions</option>
                            </select>
                        </div>
                        <!-- /templates -->

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Multiselect methods</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <!-- Destroy method -->
                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Destroy method</h6>
                            <p class="mb-3">This method is used to destroy the plugin on the given element - meaning unbinding the plugin.</p>

                            <div class="input-group">
                                <select class="form-control multiselect-method-destroy" multiple="multiple" data-fouc>
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>

                                <div class="input-group-append">
                                    <button type="button" class="btn btn-light multiselect-create-button">Create</button>
                                    <button type="button" class="btn bg-danger multiselect-destroy-button">Destroy</button>
                                </div>
                            </div>
                        </div>
                        <!-- /destroy method -->


                        <!-- Refresh method -->
                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Refresh method</h6>
                            <p class="mb-3">This method is used to refresh the checked checkboxes based on the currently selected options within the select. Click <strong>'Select'</strong>, then click <strong>refresh</strong>. The plugin will update the checkboxes.</p>

                            <div class="input-group">
                                <select class="form-control multiselect-method-refresh" multiple="multiple" data-fouc>
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>

                                <div class="input-group-append">
                                    <button type="button" class="btn btn-light multiselect-select-button">Select</button>
                                    <button type="button" class="btn btn-light multiselect-deselect-button">Deselect</button>
                                    <button type="button" class="btn bg-blue btn-icon multiselect-refresh-button"><i class="icon-reload-alt"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- /refresh method -->


                        <!-- Rebuild method -->
                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Rebuild method</h6>
                            <p class="mb-3">Rebuilds the whole dropdown menu. All selected options will remain selected (if still existent!). Click <strong>Add</strong> button and then click <strong>Rebuild</strong> button, open dropdown and you'll notice new options added to the bottom of the list.</p>

                            <div class="input-group">
                                <select class="form-control multiselect-method-rebuild" multiple="multiple" data-fouc>
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>

                                <div class="input-group-append">
                                    <button type="button" class="btn btn-light multiselect-add-button">Add</button>
                                    <button type="button" class="btn btn-light multiselect-delete-button">Delete</button>
                                    <button type="button" class="btn bg-blue btn-icon multiselect-rebuild-button"><i class="icon-reload-alt"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- /rebuild method -->


                        <!-- Select method -->
                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Select method</h6>
                            <p class="mb-3">Selects an option by its value (which has to be given as string). Works also using an array of values.</p>

                            <div class="input-group">
                                <select class="form-control multiselect-method-select" multiple="multiple" data-fouc>
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>

                                <div class="input-group-append">
                                    <button type="button" class="btn btn-light multiselect-select-cheese-button">Cheese</button>
                                    <button type="button" class="btn btn-light multiselect-select-onions-button">Onions</button>
                                </div>
                            </div>
                        </div>
                        <!-- /select method -->


                        <!-- Deselect method -->
                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Deselect method</h6>
                            <p class="mb-3">Deselect an option by its value (which has to be given as string). Works also using an array of values.</p>

                            <div class="input-group">
                                <select class="form-control multiselect-method-deselect" multiple="multiple" data-fouc>
                                    <option value="cheese" selected>Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions" selected>Onions</option>
                                </select>

                                <div class="input-group-append">
                                    <button type="button" class="btn btn-light multiselect-deselect-cheese-button">Deselect Cheese</button>
                                    <button type="button" class="btn btn-light multiselect-deselect-onions-button">Deselect Onions</button>
                                </div>
                            </div>
                        </div>
                        <!-- /deselect method -->


                        <!-- Disable method -->
                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Disable method</h6>
                            <p class="mb-3">Disable both the underlying select and the dropdown button.</p>

                            <div class="input-group">
                                <select class="form-control multiselect-method-disable" multiple="multiple" data-fouc>
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>

                                <div class="input-group-append">
                                    <button type="button" class="btn bg-danger multiselect-disable1-button">Disable</button>
                                    <button type="button" class="btn btn-light multiselect-enable1-button">Enable</button>
                                </div>
                            </div>
                        </div>
                        <!-- /disable method -->


                        <!-- Enable method -->
                        <div class="mb-3">
                            <h6 class="font-weight-semibold">Enable method</h6>
                            <p class="mb-3">Enable both the underlying select and the dropdown button.</p>

                            <div class="input-group">
                                <select class="form-control multiselect-method-enable" multiple="multiple" disabled data-fouc>
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>

                                <div class="input-group-append">
                                    <button type="button" class="btn bg-blue multiselect-enable2-button">Enable</button>
                                    <button type="button" class="btn btn-light multiselect-disable2-button">Disable</button>
                                </div>
                            </div>
                        </div>
                        <!-- /enable method -->

                    </div>
                </div>
            </div>
        </div>
        <!-- /more complex examples -->

    </div>
    <!-- FIM form_multiselect -->













    <!-- INICIO form_input_groups -->
    <div class="content">

        <!-- Input group addons -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Input group addons</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <p class="mb-4">Extend form controls by adding text or buttons before, after, or on both sides of any text-based <code>&lt;input></code>. Use <code>.input-group</code> with an <code>.input-group-prepend</code> to prepend or <code>.input-group-append</code> to append elements to a single <code>.form-control</code>. Place one add-on or button on either side of an input. You may also place one on both sides of an input. While multiple <code>&lt;input></code>s are supported visually, validation styles are only available for input groups with a single <code>&lt;input></code>.</p>

                <form action="#">
                    <fieldset class="mb-3">
                        <legend class="text-uppercase font-size-sm font-weight-bold">Text addon</legend>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Left text addon</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">@</span>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Left addon">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Multiple left addons</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                        <span class="input-group-text">0.00</span>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Multiple left addons">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Right text addon</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Right addon">
                                    <span class="input-group-append">
                                        <span class="input-group-text">%</span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Multiple right addons</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Multiple right addons">
                                    <span class="input-group-append">
                                        <span class="input-group-text">$</span>
                                        <span class="input-group-text">0.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Left and right text addons</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Left and right addons">
                                    <span class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="mb-3">
                        <legend class="text-uppercase font-size-sm font-weight-bold">Icon addon</legend>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Left icon addon</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon-user"></i></span>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Left icon">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Right icon addon</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Right icon">
                                    <span class="input-group-append">
                                        <span class="input-group-text"><i class="icon-user"></i></span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Left and right icon addons</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon-menu6"></i></span>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Left and right icons">
                                    <span class="input-group-append">
                                        <span class="input-group-text"><i class="icon-inbox"></i></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="mb-3">
                        <legend class="text-uppercase font-size-sm font-weight-bold">Spinner addon</legend>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Left spinner addon</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon-spinner2 spinner"></i></span>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Left spinner">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Right spinner addon</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Right spinner">
                                    <span class="input-group-append">
                                        <span class="input-group-text"><i class="icon-spinner2 spinner"></i></span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Left and right spinner addons</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon-spinner2 spinner"></i></span>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Left and right spinners">
                                    <span class="input-group-append">
                                        <span class="input-group-text"><i class="icon-spinner9 spinner"></i></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend class="text-uppercase font-size-sm font-weight-bold">Color options</legend>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Contextual class</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text bg-primary border-primary text-white">
                                            <i class="icon-pin-alt"></i>
                                        </span>
                                    </span>
                                    <input type="text" class="form-control border-left-0" placeholder="Primary addon">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Custom color class</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <input type="text" class="form-control border-right-0" placeholder="Pink addon">
                                    <span class="input-group-append">
                                        <span class="input-group-text bg-pink border-pink text-white">
                                            <i class="icon-help"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Color everything</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text bg-slate-700 border-slate-700 text-white">
                                            <i class="icon-lock2"></i>
                                        </span>
                                    </span>
                                    <input type="text" class="form-control bg-slate text-white border-transparent" placeholder="Solid background color">
                                    <span class="input-group-append">
                                        <span class="input-group-text bg-slate-700 border-slate-700 text-white">
                                            <i class="icon-help"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <!-- /input group addons -->


        <!-- Input group buttons -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Input group buttons</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <p class="mb-4">Optional buttons as addons. Buttons in input groups are a bit different and require one extra level of nesting. Instead of <code>.input-group-addon</code>, you'll need to use <code>.input-group-prepend (append)</code> to wrap the buttons. Input group buttons support all available button options except sizing - all buttons height will be adjusted automatically according to the input group size.</p>

                <form action="#">
                    <fieldset class="mb-3">
                        <legend class="text-uppercase font-size-sm font-weight-bold">Button addons</legend>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Left button</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <button class="btn btn-light" type="button">Button</button>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Left button">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Right button</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Right button">
                                    <span class="input-group-append">
                                        <button class="btn btn-light" type="button">Button</button>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Left and right buttons</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-prepend">	
                                        <button class="btn btn-light btn-icon" type="button"><i class="icon-user"></i></button>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Left and right buttons">
                                    <span class="input-group-append">
                                        <button class="btn btn-light" type="button">Button</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="mb-3">
                        <legend class="text-uppercase font-size-sm font-weight-bold">Button dropdown addons</legend>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Left button dropdown</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">Action</button>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <a href="#" class="dropdown-item">One more line</a>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Left dropdown">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Right button dropdown</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Right dropdown">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">Action</button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <a href="#" class="dropdown-item">One more line</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Left and right button dropdowns</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">Action</button>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <a href="#" class="dropdown-item">One more line</a>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Left and right dropdowns">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">Action</button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <a href="#" class="dropdown-item">One more line</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="mb-3">
                        <legend class="text-uppercase font-size-sm font-weight-bold">Segmented button addons</legend>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Left button</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-light">Action</button>
                                        <button type="button" class="btn btn-light dropdown-toggle btn-icon" data-toggle="dropdown"></button>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <a href="#" class="dropdown-item">One more line</a>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Left buttons">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Right button</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Right buttons">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-light">Action</button>
                                        <button type="button" class="btn btn-light dropdown-toggle btn-icon" data-toggle="dropdown"></button>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <a href="#" class="dropdown-item">One more line</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Left and right buttons</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-light">Button</button>
                                        <button type="button" class="btn btn-light dropdown-toggle btn-icon" data-toggle="dropdown"></button>

                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <a href="#" class="dropdown-item">One more line</a>
                                        </div>
                                    </div>

                                    <input type="text" class="form-control" placeholder="Left and right buttons">

                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-light btn-icon"><i class="icon-user"></i></button>
                                        <button type="button" class="btn btn-light dropdown-toggle btn-icon" data-toggle="dropdown"></button>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <a href="#" class="dropdown-item">One more line</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend class="text-uppercase font-size-sm font-weight-bold">Color options</legend>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Contextual button</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <button class="btn bg-danger" type="button">Button</button>
                                    </span>
                                    <input type="text" class="form-control border-left-0" placeholder="Danger button">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Custom color button</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <input type="text" class="form-control border-right-0" placeholder="Teal button">
                                    <span class="input-group-append">
                                        <button class="btn bg-teal" type="button">Button</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <!-- /input group buttons -->


        <!-- Input group options -->
        <div class="card mb-4">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Input group options</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <p class="mb-4">Besides default addon options, input groups support different variations of checkboxes, radio buttons, switches, contextual validation state options, icons in different positions. All colors can be easily changed in LESS variables, options and positions also can be mixed. However avoid using <code>&lt;select></code> elements here as they cannot be fully styled in WebKit browsers and <code>&lt;textarea></code> elements here as their rows attribute will not be respected in some cases.</p>

                <form action="#">
                    <fieldset class="mb-3">
                        <legend class="text-uppercase font-size-sm font-weight-bold">Sizing options</legend>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Large input group</label>
                            <div class="col-lg-10">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon-mention"></i></span>
                                    </span>
                                    <input type="text" class="form-control" placeholder=".input-group-lg">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Default input group</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon-git-pull-request"></i></span>
                                    </span>
                                    <input type="text" class="form-control" placeholder=".input-group">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Small input group</label>
                            <div class="col-lg-10">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon-statistics"></i></span>
                                    </span>
                                    <input type="text" class="form-control" placeholder=".input-group-sm">
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="mb-3">
                        <legend class="text-uppercase font-size-sm font-weight-bold">Validation states</legend>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2 font-weight-semibold text-success">Valid state</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text alpha-success text-success border-success"><i class="icon-comment"></i></span>
                                    </span>
                                    <input type="text" class="form-control border-success" placeholder="Success color classes">
                                </div>
                                <span class="form-text text-success">Success state helper</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2 font-weight-semibold text-danger">Invalid state</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text alpha-danger text-danger border-danger"><i class="icon-graph"></i></span>
                                    </span>
                                    <input type="text" class="form-control border-danger" placeholder="Danger color classes">
                                </div>
                                <span class="form-text text-danger">Invalid state helper</span>
                            </div>
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-right row">
                            <label class="col-form-label col-lg-2 font-weight-semibold text-success">Valid with icon</label>
                            <div class="col-lg-10">
                                <div class="position-relative">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <span class="input-group-text alpha-success text-success border-success"><i class="icon-graduation"></i></span>
                                        </span>
                                        <input type="text" class="form-control border-success" placeholder="Success color classes">
                                    </div>
                                    <div class="form-control-feedback text-success">
                                        <i class="icon-checkmark-circle"></i>
                                    </div>
                                </div>
                                <span class="form-text text-success">Valid state helper</span>
                            </div>
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-right row">
                            <label class="col-form-label col-lg-2 font-weight-semibold text-danger">Invalid with icon</label>
                            <div class="col-lg-10">
                                <div class="position-relative">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <span class="input-group-text alpha-danger text-danger border-danger"><i class="icon-droplets"></i></span>
                                        </span>
                                        <input type="text" class="form-control border-danger" placeholder="Danger color classes">
                                    </div>
                                    <div class="form-control-feedback text-danger">
                                        <i class="icon-cancel-circle2"></i>
                                    </div>
                                </div>
                                <span class="form-text text-danger">Error input group helper</span>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend class="text-uppercase font-size-sm font-weight-bold">Addon options</legend>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Default checkbox</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">
                                            <input type="checkbox" checked>
                                        </span>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Default checkbox addon">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Styled checkbox</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" class="form-control-styled" name="input-addon-checkbox" checked data-fouc>
                                        </div>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Styled checkbox addon">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Default radio button</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">
                                            <input type="radio" name="addon-radio">
                                        </span>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Unstyled radio addon">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Styled radio button</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="radio" name="addon-radio" class="form-control-styled" checked data-fouc>
                                        </div>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Styled radio addon">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Switchery toggle</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">
                                            <input type="checkbox" class="form-control-switchery" checked data-fouc>
                                        </span>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Switchery toggle addon">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <!-- /input group options -->


        <!-- Touchspin spinners -->
        <div class="mb-3">
            <h6 class="mb-0 font-weight-semibold">
                Touchspin spinners
            </h6>
            <span class="text-muted d-block">Touch friendly input spinner component</span>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Bootstrap touchspin</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <p class="mb-3">Basically Touchspin uses default Bootstrap <code>input-group</code> component styling with ability to add extra classes to the buttons and addons to match your design perfectly.</p>

                        <div class="form-group">
                            <label>Example with postfix: </label>
                            <input type="text" value="55" class="form-control touchspin-postfix">
                        </div>

                        <div class="form-group">
                            <label>Example with prefix: </label>
                            <input type="text" value="0" class="form-control touchspin-prefix">
                        </div>

                        <div class="form-group">
                            <label>Init with empty value: </label>
                            <input type="text" value="" class="form-control touchspin-empty">
                        </div>

                        <div class="form-group">
                            <label>Incremental/decremental step on up/down change: </label>
                            <input type="text" value="10" class="form-control touchspin-step">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Advanced spinners</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <p class="mb-3">Depending on your needs, you can easily swith off mousewheel support, change steps and increments, use more complex examples with button groups and dropdowns.</p>

                        <div class="form-group">
                            <label>Button group example</label>
                            <div class="input-group">
                                <input type="text" class="form-control touchspin-button-group" value="50">
                                <div class="input-group-append">
                                    <button type="button" class="btn bg-primary">Action</button>
                                    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown"></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item">Action</a>
                                        <a href="#" class="dropdown-item">Another action</a>
                                        <a href="#" class="dropdown-item">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Value attribute is not set: <span class="text-muted">applying settings.initval</span></label>
                            <input type="text" value="" class="form-control touchspin-set-value">
                        </div>

                        <div class="form-group">
                            <label>Value is set explicitly to 33: <span class="text-muted">skipping settings.initval</span></label>
                            <input type="text" value="33" class="form-control touchspin-set-value">
                        </div>

                        <div class="form-group">
                            <label>No mousewheel support: </label>
                            <input type="text" value="10" class="form-control touchspin-no-mousewheel">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /touchspin spinners -->


        <!-- Touchspin layouts -->
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Horizontal spinners</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <p class="mb-3">Touchspin supports default Bootstrap <code>input-group</code> component sizing classes, applied to the input or wrapped in <code>div</code> with these classes.</p>

                        <div class="form-group">
                            <label>Large spinner</label>
                            <input type="text" value="55" class="form-control form-control-lg touchspin-basic">
                        </div>

                        <div class="form-group">
                            <label>Default spinner</label>
                            <input type="text" value="55" class="form-control touchspin-basic">
                        </div>

                        <div class="form-group">
                            <label>Small spinner</label>
                            <input type="text" value="55" class="form-control form-control-sm touchspin-basic">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Vertical spinners</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <p class="mb-3">Also Touchspin library supports <code>vertical</code> spinner controls orientation, that appear on the right side. Buttons and icons are fully customizable.</p>

                        <div class="form-group">
                            <label>Large spinner</label>
                            <input type="text" value="55" class="form-control form-control-lg touchspin-vertical">
                        </div>

                        <div class="form-group">
                            <label>Default spinner</label>
                            <input type="text" value="55" class="form-control touchspin-vertical">
                        </div>

                        <div class="form-group">
                            <label>Small spinner</label>
                            <input type="text" value="55" class="form-control form-control-sm touchspin-vertical">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /touchspin layouts -->

    </div>
    <!-- FIM form_input_groups -->







    <!-- INICIO form_controls_extended --> 
    <div class="content">

        <!-- Typeahead -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Twitter typeahead</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Basic usage</h6>
                            <p class="mb-2">When initializing a typeahead, you pass the plugin method one or more datasets. The source of a dataset is responsible for computing a set of suggestions for a given query.</p>
                            <input type="text" class="form-control typeahead-basic" placeholder="States of USA">
                        </div>

                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Bloodhound engine</h6>
                            <p class="mb-2">For more advanced use cases, rather than implementing the source for your dataset yourself, you can take advantage of <code>Bloodhound</code>, the <code>typeahead.js</code> suggestion engine.</p>
                            <input type="text" class="form-control typeahead-bloodhound" placeholder="States of USA">
                        </div>

                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Prefetched data</h6>
                            <p class="mb-2">Prefetched data is fetched and processed on initialization. If the browser supports local storage, the processed data will be cached there to prevent additional network requests on subsequent page loads.</p>
                            <input type="text" class="form-control typeahead-prefetched" placeholder="Countries">
                        </div>

                        <div class="mb-3">
                            <h6 class="font-weight-semibold">Remote data</h6>
                            <p class="mb-2">Remote data is only used when the data provided by local and prefetch is insufficient. In order to prevent an obscene number of requests being made to the remote endpoint, requests are rate-limited.</p>
                            <input type="text" class="form-control typeahead-remote" placeholder="Oscar winners for Best Picture">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Custom templates</h6>
                            <p class="mb-2">Custom templates give you full control over how suggestions get rendered making it easy to customize the look and feel of your typeahead. Requires <code>Handlebars.js</code> extension for compilation.</p>
                            <input type="text" class="form-control typeahead-custom-templates" placeholder="Oscar winners for Best Picture">
                        </div>

                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Multiple datasets</h6>
                            <p class="mb-2">Multiple datasets give you visually separated sets of data inside Dropdown menu with custom titles, managed in <code>templates</code> option. This looks like a <code>&lt;optgroup></code> titles in selects.</p>
                            <input type="text" class="form-control typeahead-multiple-datasets" placeholder="NBA and NHL teams">
                        </div>

                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Dropdown height</h6>
                            <p class="mb-2">To change the height of your dropdown menu, just wrap your input in some div with custom css styles and change necessary css properties or change it in css directly.</p>
                            <div class="typeahead-scrollable">
                                <input type="text" class="form-control typeahead-scrollable-menu" placeholder="Countries">
                            </div>
                        </div>

                        <div class="mb-3">
                            <h6 class="font-weight-semibold">RTL support</h6>
                            <p class="mb-2">Twitter Typeahead supports <code>RTL</code> direction. Wrap your input in any div with <code>text-align: right;</code> property and add <code>dir="rtl"</code> to your input, now your dropdown menu is right aligned.</p>
                            <input type="text" class="form-control typeahead-rtl-support" dir="rtl" placeholder="نعم">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /typeahead -->


        <!-- Elastic textarea -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Elastic textarea</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <h6 class="font-weight-semibold">Basic example</h6>
                            <p class="mb-3">Drop Autosize into any existing website and it should Just Work™. The source is short and well commented if you are curious to how it works.</p>

                            <div class="form-group">
                                <textarea rows="4" cols="4" class="form-control elastic" placeholder="Textarea"></textarea>
                            </div>

                            <button type="button" class="btn btn-primary">Submit form</button>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-3">
                            <h6 class="font-weight-semibold">Manual triggering</h6>
                            <p class="mb-3">When the value of a textarea has been changed through JavaScript, trigger the <code>autosize.resize</code> event immediately after to update the height.</p>

                            <div class="form-group">
                                <textarea rows="4" cols="4" class="form-control elastic elastic-manual" placeholder="Press 'Trigger Manually' button"></textarea>
                            </div>

                            <button type="button" class="btn btn-primary elastic-manual-trigger">Trigger manually</button>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-3">
                            <h6 class="font-weight-semibold">Removing autosize</h6>
                            <p class="mb-3">Trigger the <code>autosize.destroy</code> event to remove autosize from a textarea element. Once <code>destroy</code> button clicked, autosize will be removed.</p>

                            <div class="form-group">
                                <textarea rows="4" cols="4" class="form-control elastic elastic-destroy" placeholder="Press 'Destroy' button to remove autosize"></textarea>
                            </div>

                            <button type="button" class="btn btn-primary elastic-destroy-trigger">Destroy Autosize</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /elastic textarea -->


        <!-- Masked inputs -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Masked inputs</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Date: </label>
                            <input type="text" class="form-control" data-mask="99/99/9999" placeholder="Enter starting date">
                            <span class="form-text text-muted">99/99/9999</span>
                        </div>

                        <div class="form-group">
                            <label>Phone: </label>
                            <input type="text" class="form-control" data-mask="(999) 999-9999" placeholder="Enter your phone #">
                            <span class="form-text text-muted">(999) 999-9999</span>
                        </div>

                        <div class="form-group">
                            <label>Phone + Ext: </label>
                            <input type="text" class="form-control" data-mask="(999) 999-9999 / x99999" placeholder="Enter your phone #">
                            <span class="form-text text-muted">(999) 999-9999 / x99999</span>
                        </div>

                        <div class="form-group">
                            <label>Currency: </label>
                            <input type="text" class="form-control" data-mask="$999" placeholder="Enter amount in USD">
                            <span class="form-text text-muted">$999</span>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>International format: </label>
                            <input type="text" class="form-control" data-mask="+39 999 999 999" placeholder="Enter your phone in international format">
                            <span class="form-text text-muted">+39 999 999 999</span>
                        </div>

                        <div class="form-group">
                            <label>Tax ID: </label>
                            <input type="text" class="form-control" data-mask="99-9999999" placeholder="Enter your tax id">
                            <span class="form-text text-muted">99-9999999</span>
                        </div>

                        <div class="form-group">
                            <label>SSN: </label>
                            <input type="text" class="form-control" data-mask="999-99-9999" placeholder="Enter your social security number">
                            <span class="form-text text-muted">999-99-9999</span>
                        </div>

                        <div class="form-group">
                            <label>Credit card: </label>
                            <input type="text" class="form-control" data-mask="9999-9999-9999-9999" placeholder="Enter your credit card number">
                            <span class="form-text text-muted">9999-9999-9999-9999</span>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Product key: </label>
                            <input type="text" class="form-control" data-mask="a*-999-a999" placeholder="Enter your product key">
                            <span class="form-text text-muted">a*-999-a999</span>
                        </div>

                        <div class="form-group">
                            <label>Purchase order: </label>
                            <input type="text" class="form-control" data-mask="aaa-999-***" placeholder="Enter your order #">
                            <span class="form-text text-muted">aaa-999-***</span>
                        </div>

                        <div class="form-group">
                            <label>Percentage: </label>
                            <input type="text" class="form-control" data-mask="99%" placeholder="Enter value in %">
                            <span class="form-text text-muted">99%</span>
                        </div>

                        <div class="form-group">
                            <label>ISBN: </label>
                            <input type="text" class="form-control" data-mask="999-99-999-9999-9" placeholder="Enter your ISBN">
                            <span class="form-text text-muted">999-99-999-9999-9</span>
                        </div>
                    </div>
                </div>	
            </div>
        </div>
        <!-- /masked inputs -->


        <!-- Input formatter -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Input formatter</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Date: </label>
                            <input type="text" class="form-control" name="format-date" placeholder="Enter starting date">
                            <span class="form-text text-muted">99/99/9999</span>
                        </div>

                        <div class="form-group">
                            <label>Phone number: </label>
                            <input type="text" class="form-control format-phone-number" placeholder="Enter your phone number">
                            <span class="form-text text-muted">(999) 999 - 9999</span>
                        </div>

                        <div class="form-group">
                            <label>Phone + Ext: </label>
                            <input type="text" class="form-control" name="format-phone-ext" placeholder="Enter your phone number">
                            <span class="form-text text-muted">(999) 999-9999 / a999</span>
                        </div>

                        <div class="form-group">
                            <label>Currency: </label>
                            <input type="text" class="form-control" name="format-currency" placeholder="Enter amount in USD">
                            <span class="form-text text-muted">$999.99</span>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>International format: </label>
                            <input type="text" class="form-control" name="format-international-phone" placeholder="Enter your phone in international format">
                            <span class="form-text text-muted">+39 999 999 999</span>
                        </div>

                        <div class="form-group">
                            <label>Tax ID: </label>
                            <input type="text" class="form-control" name="format-tax-id" placeholder="Enter your tax id">
                            <span class="form-text text-muted">99 - 9999999</span>
                        </div>

                        <div class="form-group">
                            <label>SSN: </label>
                            <input type="text" class="form-control" name="format-ssn" placeholder="Enter your social security number">
                            <span class="form-text text-muted">999 - 99 - 9999</span>
                        </div>

                        <div class="form-group">
                            <label>Credit card: </label>
                            <input type="text" class="form-control" name="format-credit-card" placeholder="Enter your credit card number">
                            <span class="form-text text-muted">9999 - 9999 - 9999 - 9999</span>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Product key: </label>
                            <input type="text" class="form-control" name="format-product-key" placeholder="Enter your product key">
                            <span class="form-text text-muted">a* - 999 - a999</span>
                        </div>

                        <div class="form-group">
                            <label>Order number: </label>
                            <input type="text" class="form-control" name="format-order-number" placeholder="Enter your order #">
                            <span class="form-text text-muted">aaa - 999 - ***</span>
                        </div>

                        <div class="form-group">
                            <label>ISBN: </label>
                            <input type="text" class="form-control" name="format-isbn" placeholder="Enter your ISBN">
                            <span class="form-text text-muted">999 - 99 - 999 - 9999 - 9</span>
                        </div>

                        <div class="form-group">
                            <label>Visible formatted characters: </label>
                            <input type="text" class="form-control" name="format-persistent" placeholder="Enter your phone #">
                            <span class="form-text text-muted">+3 (999) 999-99-99</span>
                        </div>
                    </div>
                </div>	
            </div>
        </div>
        <!-- /input formatter -->


        <!-- Password generator -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Password generator</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <h6 class="font-weight-semibold">Checker inside badge</h6>
                            <p class="mb-3">Password checker is attached to the badge, which appears below the input field. Empty badge is hidden, if you add any text inside badge, it'll stay visible.</p>

                            <div class="form-group">
                                <div class="badge-indicator">
                                    <input type="text" class="form-control" placeholder="Enter your password">
                                    <span class="badge form-text password-indicator-badge"></span>
                                </div>
                            </div>

                            <button type="button" class="btn btn-info generate-badge">Generate 12 characters password</button>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-3">
                            <h6 class="font-weight-semibold">Label inside input</h6>
                            <p class="mb-3">Rules are the same as for password checker inside badge, but this one has absolute position and placed inside <code>form-group</code>. Empty badge is also hidden.</p>

                            <div class="form-group">
                                <div class="badge-indicator-absolute">
                                    <input type="text" class="form-control" placeholder="Enter your password">
                                    <span class="badge password-indicator-badge-absolute"></span>
                                </div>
                            </div>

                            <button type="button" class="btn btn-info generate-badge-absolute">Generate 10 characters password</button>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-3">
                            <h6 class="font-weight-semibold">Label inside addon</h6>
                            <p class="mb-3">In this example password checker appears as input group <code>text addon</code>. Can be left and/or right aligned, supports all input group styles. Styles can be adjusted in JS config.</p>

                            <div class="form-group">
                                <div class="input-group group-indicator">
                                    <input type="text" class="form-control" placeholder="Enter your password">
                                    <span class="input-group-append">
                                        <span class="input-group-text">No password</span>
                                    </span>
                                </div>
                            </div>

                            <button type="button" class="btn btn-info generate-group">Generate 8 characters password</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /password generator -->


        <!-- Bootstrap maxlength -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Bootstrap maxlength</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Basic example</h6>
                            <p class="mb-2">Basic example of maxlength plugin. The badge will show up right below the input by default when the remaining chars are 10 or less. This is a default value and position.</p>
                            <input type="text" class="form-control maxlength" maxlength="20" placeholder="Type 10 characters...">
                        </div>

                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Label position</h6>
                            <p class="mb-2">The field counter can be positioned at the top, bottom, left or right via <code>placement</code> option. You can also place the maxlength indicator on the corners: bottom-right, top-right, top-left, bottom-left and centered-right.</p>
                            <input type="text" class="form-control maxlength-badge-position" maxlength="20" placeholder="Centered right position">
                        </div>

                        <div class="mb-3">
                            <h6 class="font-weight-semibold">Full featured</h6>
                            <p class="mb-2">This is a complete example where all the options configured for the bootstrap-maxlength counter are setted. <strong>Please note:</strong> if the <code>alwaysShow</code> option is enabled, the <code>threshold</code> option is ignored.</p>
                            <input type="text" class="form-control maxlength-options" maxlength="20" placeholder="Always visible with custom text">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Change the threshold value</h6>
                            <p class="mb-2">Do you want the badge to show up when there are 20 chars or less? Use the <code>threshold</code> option. In this example badge appears when the remaining chars are <code>15</code> or less.</p>
                            <input type="text" class="form-control maxlength-threshold" maxlength="20" placeholder="Type 5 characters...">
                        </div>

                        <div class="mb-4">
                            <h6 class="font-weight-semibold">Custom options</h6>
                            <p class="mb-2">Example with custom options. All options can be mixed: here badge will show up after entering 10 characters, badge has different color and shows up after the limit is reached.</p>
                            <input type="text" class="form-control maxlength-custom" maxlength="20" placeholder="With Primary and Danger badges">
                        </div>

                        <div class="mb-3">
                            <h6 class="font-weight-semibold">Textarea example</h6>
                            <p class="mb-2">Bootstrap maxlength supports textarea as well as inputs. Even on old IE. Maxlength, attached to the textarea supports all available options and settings by default.</p>
                            <textarea rows="3" cols="3" maxlength="225" class="form-control maxlength-textarea" placeholder="This textarea has a limit of 225 chars."></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /bootstrap maxlength -->

    </div>
    <!-- FIM form_controls_extended -->

















    <!-- INICIO form_floating_labels -->
    <div class="content">

        <!-- Floating labels -->
        <div class="row">
            <div class="col-md-6">

                <!-- Title -->
                <div class="mb-3">
                    <h6 class="mb-0 font-weight-semibold">
                        Hidden labels
                    </h6>
                    <span class="text-muted d-block">Inputs with empty values</span>
                </div>
                <!-- /title -->


                <!-- Text inputs -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Text inputs</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Text input</label>
                            <input type="text" class="form-control" placeholder="Text input">
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Password input</label>
                            <input type="password" class="form-control" placeholder="Password input">
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Input with helper</label>
                            <input type="text" class="form-control" placeholder="Input with helper">
                            <span class="form-text text-muted">Input helper text block</span>
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label text-success font-weight-semibold">Contextual input</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" class="form-control border-success" placeholder="Success with icon">
                                <div class="form-control-feedback text-success">
                                    <i class="icon-checkmark3"></i>
                                </div>
                            </div>
                            <span class="form-text text-success">Contextual input helper</span>
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Readonly input field</label>
                            <input type="text" class="form-control" readonly placeholder="Readonly input field">
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Disabled input field</label>
                            <input type="text" class="form-control" disabled placeholder="Disabled input field">
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Textarea</label>
                            <textarea rows="5" cols="5" class="form-control" placeholder="Textarea"></textarea>
                        </div>
                    </div>
                </div>
                <!-- /text inputs -->


                <!-- Input groups -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Input groups</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Left group addon</label>
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-paperplane"></i></span>
                                </span>
                                <input type="text" class="form-control" placeholder="Left group addon">
                            </div>
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Right group addon</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Right group addon">
                                <span class="input-group-append">
                                    <span class="input-group-text"><i class="icon-truck"></i></span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Left group button</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="button" class="btn bg-blue dropdown-toggle" data-toggle="dropdown">Action</button>
                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item">Action</a>
                                        <a href="#" class="dropdown-item">Another action</a>
                                        <a href="#" class="dropdown-item">Something else here</a>
                                        <a href="#" class="dropdown-item">One more line</a>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Left group button">
                            </div>
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Right group button</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Right group button">
                                <div class="input-group-append">
                                    <button type="button" class="btn bg-blue dropdown-toggle" data-toggle="dropdown">Action</button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item">Action</a>
                                        <a href="#" class="dropdown-item">Another action</a>
                                        <a href="#" class="dropdown-item">Something else here</a>
                                        <a href="#" class="dropdown-item">One more line</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-group-float form-group-feedback form-group-feedback-right">
                            <label class="form-group-float-label text-danger font-weight-semibold">Contextual input group</label>
                            <div class="position-relative">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text alpha-danger text-danger border-danger">
                                            <i class="icon-blocked"></i>
                                        </span>
                                    </span>
                                    <input type="text" class="form-control border-danger" placeholder="Contextual input group">
                                </div>
                                <div class="form-control-feedback text-danger">
                                    <i class="icon-spam"></i>
                                </div>
                            </div>
                            <span class="form-text text-danger">Contextual input group helper</span>
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Touchspin spinners</label>
                            <input type="text" value="" class="form-control touchspin-basic" placeholder="Touchspin spinners">
                        </div>
                    </div>
                </div>
                <!-- /input groups -->


                <!-- Selects -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Selects</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Basic select</label>
                            <select class="form-control">
                                <option value="" selected>Basic select</option>
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Styled select</label>
                            <select class="form-control form-control-uniform" data-fouc>
                                <option value="" selected>Basic select</option>
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Single Select2 select</label>
                            <select data-placeholder="Single Select2 select" class="form-control form-control-select2" data-fouc>
                                <option></option>
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Multiple Select2 select</label>
                            <select data-placeholder="Multiple Select2 select" multiple="multiple" class="form-control form-control-select2" data-fouc>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                                <optgroup label="Eastern Time Zone">
                                    <option value="CT">Connecticut</option>
                                    <option value="FL">Florida</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="WV">West Virginia</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Bootstrap multiselect</label>
                            <select class="form-control form-control-multiselect" multiple="multiple" data-fouc>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- /selects -->


                <!-- Other inputs -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Other inputs</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Typeahead</label>
                            <input type="text" class="form-control typeahead-basic" placeholder="Typeahead">
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Masked input</label>
                            <input type="text" class="form-control" data-mask="99/99/9999" placeholder="Masked input">
                            <span class="form-text text-muted">99/99/9999</span>
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Input formatter</label>
                            <input type="text" class="form-control" name="format-date" placeholder="Input formatter">
                            <span class="form-text text-muted">99/99/9999</span>
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Bootstrap Maxlength</label>
                            <input type="text" class="form-control form-control-maxlength" maxlength="10" placeholder="Bootstrap Maxlength">
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Bootstrap Tokenfield</label>
                            <input type="text" class="form-control token-field" placeholder="- Bootstrap Tokenfield" data-fouc>
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Bootstrap tags input</label>
                            <input type="text" class="form-control tags-input" placeholder="- Bootstrap tags input" data-fouc>
                        </div>

                        <div class="form-group form-group-float">
                            <label class="d-block form-group-float-label">Default file input</label>
                            <input type="file" class="form-control">
                        </div>

                        <div class="form-group form-group-float">
                            <label class="d-block form-group-float-label">Styled file input</label>
                            <input type="file" class="form-control-uniform" data-fouc>
                        </div>
                    </div>
                </div>
                <!-- /other inputs -->

            </div>

            <div class="col-md-6">

                <!-- Title -->
                <div class="mb-3">
                    <h6 class="mb-0 font-weight-semibold">
                        Visible labels
                    </h6>
                    <span class="text-muted d-block">Inputs with predefined values</span>
                </div>
                <!-- /title -->


                <!-- Text inputs -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Text inputs</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Text input</label>
                            <input type="text" class="form-control" value="Value" placeholder="Text input">
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Password input</label>
                            <input type="password" class="form-control" value="Value" placeholder="Password input">
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Input with helper</label>
                            <input type="text" class="form-control" value="Value" placeholder="Input with helper">
                            <span class="form-text text-muted">Input helper text block</span>
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label text-success font-weight-semibold">Contextual input</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" class="form-control border-success" value="Value" placeholder="Success with icon">
                                <div class="form-control-feedback text-success">
                                    <i class="icon-checkmark3"></i>
                                </div>
                            </div>
                            <span class="form-text text-success">Contextual input helper</span>
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Readonly input field</label>
                            <input type="text" class="form-control" readonly value="Value" placeholder="Readonly input field">
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Disabled input field</label>
                            <input type="text" class="form-control" disabled value="Value" placeholder="Disabled input field">
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Textarea</label>
                            <textarea rows="5" cols="5" class="form-control" placeholder="Textarea">Text</textarea>
                        </div>
                    </div>
                </div>
                <!-- /text inputs -->


                <!-- Input groups -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Input groups</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Left group addon</label>
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-paperplane"></i></span>
                                </span>
                                <input type="text" class="form-control" value="Value" placeholder="Left group addon">
                            </div>
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Right group addon</label>
                            <div class="input-group">
                                <input type="text" class="form-control" value="Value" placeholder="Right group addon">
                                <span class="input-group-append">
                                    <span class="input-group-text"><i class="icon-truck"></i></span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Left group button</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="button" class="btn bg-blue dropdown-toggle" data-toggle="dropdown">Action</button>
                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item">Action</a>
                                        <a href="#" class="dropdown-item">Another action</a>
                                        <a href="#" class="dropdown-item">Something else here</a>
                                        <a href="#" class="dropdown-item">One more line</a>
                                    </div>
                                </div>
                                <input type="text" class="form-control" value="Value" placeholder="Left group button">
                            </div>
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Right group button</label>
                            <div class="input-group">
                                <input type="text" class="form-control" value="Value" placeholder="Right group button">
                                <div class="input-group-append">
                                    <button type="button" class="btn bg-blue dropdown-toggle" data-toggle="dropdown">Action</button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item">Action</a>
                                        <a href="#" class="dropdown-item">Another action</a>
                                        <a href="#" class="dropdown-item">Something else here</a>
                                        <a href="#" class="dropdown-item">One more line</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-group-float form-group-feedback form-group-feedback-right">
                            <label class="form-group-float-label text-danger font-weight-semibold">Contextual input group</label>
                            <div class="position-relative">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text alpha-danger text-danger border-danger"><i class="icon-blocked"></i></span>
                                    </span>
                                    <input type="text" class="form-control border-danger" value="Value" placeholder="Contextual input group">
                                </div>
                                <div class="form-control-feedback text-danger">
                                    <i class="icon-spam"></i>
                                </div>
                            </div>
                            <span class="form-text text-danger">Contextual input group helper</span>
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Touchspin spinners</label>
                            <input type="text" value="10" class="form-control touchspin-basic" placeholder="Touchspin spinners">
                        </div>
                    </div>
                </div>
                <!-- /input groups -->


                <!-- Selects -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Selects</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Basic select</label>
                            <select class="form-control">
                                <option value="">Select state...</option>
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK" selected>Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Styled select</label>
                            <select class="form-control form-control-uniform" data-fouc>
                                <option value="" selected>Styled select</option>
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK" selected>Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Single Select2 select</label>
                            <select data-placeholder="Single Select2 select" class="form-control form-control-select2" data-fouc>
                                <option></option>
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK" selected>Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Multiple Select2 select</label>
                            <select data-placeholder="Multiple Select2 select" multiple="multiple" class="form-control form-control-select2" data-fouc>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO" selected>Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                                <optgroup label="Eastern Time Zone">
                                    <option value="CT">Connecticut</option>
                                    <option value="FL">Florida</option>
                                    <option value="MA" selected>Massachusetts</option>
                                    <option value="WV">West Virginia</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Bootstrap multiselect</label>
                            <div class="multi-select-full">
                                <select class="form-control form-control-multiselect" multiple="multiple" data-fouc>
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes" selected>Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /selects -->


                <!-- Other inputs -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Other inputs</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Typeahead</label>
                            <input type="text" class="form-control typeahead-basic" value="Arkansas" placeholder="Typeahead">
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Masked input</label>
                            <input type="text" class="form-control" data-mask="99/99/9999" value="22/22/2222" placeholder="Masked input">
                            <span class="form-text text-muted">99/99/9999</span>
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Input formatter</label>
                            <input type="text" class="form-control" name="format-date" value="33/33/3333" placeholder="Input formatter">
                            <span class="form-text text-muted">99/99/9999</span>
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Bootstrap Maxlength</label>
                            <input type="text" class="form-control form-control-maxlength" maxlength="10" value="Value" placeholder="Bootstrap Maxlength">
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Bootstrap Tokenfield</label>
                            <input type="text" class="form-control token-field" value="California,Washington" placeholder="- Bootstrap Tokenfield" data-fouc>
                        </div>

                        <div class="form-group form-group-float">
                            <label class="form-group-float-label">Bootstrap tags input</label>
                            <input type="text" class="form-control tags-input" value="Miami,Texas" placeholder="- Bootstrap tags input" data-fouc>
                        </div>

                        <div class="form-group form-group-float">
                            <label class="d-block">Default file input (forced)</label>
                            <input type="file" class="form-control" src="/file.txt" value="10" name="uploadform" size="30" id="fileupload2">
                        </div>

                        <div class="form-group form-group-float">
                            <label class="d-block">Styled file input (forced)</label>
                            <input type="file" class="form-control-uniform" data-fouc>
                        </div>
                    </div>
                </div>
                <!-- /other inputs -->

            </div>
        </div>
        <!-- /floating labels -->

    </div>
    <!-- FIM form_floating_labels -->














    <!-- INICIO form_tag_inputs -->
    <div class="content">

        <!-- Tokenfield title -->
        <div class="mb-3">
            <h6 class="mb-0 font-weight-semibold">
                Tokenfield for Bootstrap
            </h6>
            <span class="text-muted d-block">Advanced tagging/tokenizing plugin</span>
        </div>
        <!-- /tokenfield title -->


        <!-- Tokenfield basic -->
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Basic usage</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <!-- Basic example -->
                        <div class="form-group">
                            <label>Basic example</label>
                            <input type="text" class="form-control tokenfield" value="These,are,tokens" data-fouc>
                        </div>
                        <!-- /basic example -->


                        <!-- Limit tokens number -->
                        <div class="form-group">
                            <label>Limit tokens number</label>
                            <input type="text" class="form-control tokenfield" data-limit="5" value="Maximum,five,tokens" data-fouc>
                        </div>
                        <!-- /limit tokens number -->


                        <!-- Disabled field -->
                        <div class="form-group">
                            <label>Disabled field</label>
                            <input type="text" class="form-control tokenfield" disabled value="This,is,disabled,field" data-fouc>
                        </div>
                        <!-- disabled field -->


                        <!-- Readonly field -->
                        <div class="form-group">
                            <label>Readonly field</label>
                            <input type="text" class="form-control tokenfield" readonly value="This,is,readonly,field" data-fouc>
                        </div>
                        <!-- readonly field -->


                        <!-- Using typeahead -->
                        <div class="form-group">
                            <label>Using Twitter Typeahead</label>
                            <input type="text" class="form-control tokenfield-typeahead" value="Enter,color,names" data-fouc>
                        </div>
                        <!-- /using typeahead -->


                        <!-- Keyboard support -->
                        <div class="form-group">
                            <label>Keyboard support</label>
                            <input type="text" class="form-control tokenfield" value="Try,pressing,backspace" data-fouc>
                        </div>
                        <!-- /keyboard support -->


                        <!-- Copy paste support -->
                        <div class="form-group">
                            <label>Copy and paste support</label>
                            <input type="text" class="form-control tokenfield" value="Copy,and,paste" data-fouc>
                        </div>
                        <!-- /copy paste support -->


                        <!-- Create token on blur -->
                        <div class="form-group">
                            <label>Create token on blur</label>
                            <input type="text" class="form-control tokenfield-blur" value="Type,and,focus,out" data-fouc>
                        </div>
                        <!-- /create token on blur -->


                        <!-- Custom delimiter -->
                        <div class="form-group">
                            <label>Custom delimiter</label>
                            <input type="text" class="form-control tokenfield-delimiter" value="Semicolon;as;delimiter" data-fouc>
                        </div>
                        <!-- /custom delimiter -->

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Advanced examples</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <!-- Show placeholder -->
                        <div class="form-group">
                            <label>Show placeholder</label>
                            <input type="text" class="form-control tokenfield" placeholder="Add tag" value="Copy,and,paste" data-fouc>
                        </div>
                        <!-- /show placeholder -->


                        <!-- Inside form group with addon -->
                        <div class="form-group">
                            <label>Input group with addon</label>
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-price-tags"></i></span>
                                </span>
                                <input type="text" class="form-control tokenfield" value="cool,nice,great" data-fouc>
                            </div>
                        </div>
                        <!-- /inside form group with addon -->


                        <!-- Inside form group with button -->
                        <div class="form-group">
                            <label>Input group with button</label>
                            <div class="input-group">
                                <input type="text" class="form-control tokenfield" value="Cool,nice,great" data-fouc>

                                <div class="input-group-append">
                                    <button type="button" class="btn btn-light btn-icon dropdown-toggle" data-toggle="dropdown"><i class="icon-cog5"></i></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item">Action</a>
                                        <a href="#" class="dropdown-item">Another action</a>
                                        <a href="#" class="dropdown-item">Something else here</a>
                                        <a href="#" class="dropdown-item">One more line</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /inside form group with button -->


                        <!-- Set tokens method -->
                        <div class="form-group">
                            <label>Set tokens method</label>
                            <div class="input-group">
                                <input type="text" class="form-control tokenfield" id="set-tokens-field" value="Click,Set,button" data-fouc>
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-light" id="set-tokens">Set tokens</button>
                                </div>
                            </div>
                        </div>
                        <!-- /set tokens method -->


                        <!-- Get tokens method -->
                        <div class="form-group">
                            <label>Get tokens method</label>
                            <div class="input-group">
                                <input type="text" class="form-control tokenfield" id="get-tokens-field" value="Click,Get,button" data-fouc>
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-light" id="get-tokens">Get tokens</button>
                                </div>
                            </div>
                        </div>
                        <!-- /get tokens method -->


                        <!-- Create token method -->
                        <div class="form-group">
                            <label>Create token method</label>
                            <div class="input-group">
                                <input type="text" class="form-control tokenfield" id="create-token-field" value="Create,token" data-fouc>
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-light" id="create-token">Create token</button>
                                </div>
                            </div>
                        </div>
                        <!-- /create token method -->


                        <!-- Disable/enable methods -->
                        <div class="form-group">
                            <label>Disable / enable methods</label>
                            <div class="input-group">
                                <input type="text" class="form-control tokenfield-disable" value="Disable,and,enable" data-fouc>
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-light" id="disable">Disable</button>
                                    <button type="button" class="btn bg-info" id="enable">Enable</button>
                                </div>
                            </div>
                        </div>
                        <!-- /disable/enable methods -->


                        <!-- Readonly/writeable methods -->
                        <div class="form-group">
                            <label>Readonly / writable methods</label>
                            <div class="input-group">
                                <input type="text" class="form-control tokenfield-readonly" value="Readonly,and,writeable" data-fouc>
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-light" id="readonly">Readonly</button>
                                    <button type="button" class="btn bg-info" id="writeable">Writeable</button>
                                </div>
                            </div>
                        </div>
                        <!-- /readonly/writeable methods -->


                        <!-- Destroy method -->
                        <div class="form-group">
                            <label>Destroy</label>
                            <div class="input-group">
                                <input type="text" class="form-control tokenfield-destroy" value="Destroy,and,create" data-fouc>
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-light" id="destroy">Destroy</button>
                                    <button type="button" class="btn bg-info" id="create">Create</button>
                                </div>
                            </div>
                        </div>
                        <!-- /destroy method -->

                    </div>
                </div>

            </div>
        </div>
        <!-- /tokenfield basic -->


        <!-- Tokenfield inputs sizing -->
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Input sizing</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <!-- Large input size -->
                        <div class="form-group">
                            <label>Large input size</label>
                            <input type="text" class="form-control tokenfield form-control-lg" value="Red,blue,green" data-fouc>
                        </div>
                        <!-- /large input size -->


                        <!-- Default input size -->
                        <div class="form-group">
                            <label>Default input size</label>
                            <input type="text" class="form-control tokenfield" value="Red,blue,green" data-fouc>
                        </div>
                        <!-- /default input size -->


                        <!-- Small input size -->
                        <div class="form-group">
                            <label>Small input size</label>
                            <input type="text" class="form-control tokenfield form-control-sm" value="Red,blue,green" data-fouc>
                        </div>
                        <!-- /small input size -->

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Input group sizing</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <!-- Large input group size -->
                        <div class="form-group">
                            <label>Large input group size</label>
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-menu7"></i></span>
                                </div>
                                <input type="text" class="form-control tokenfield" value="Red,blue,green" data-fouc>
                            </div>
                        </div>
                        <!-- /large input group size -->


                        <!-- Default input group size -->
                        <div class="form-group">
                            <label>Default input group size</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-cash3"></i></span>
                                </div>
                                <input type="text" class="form-control tokenfield" value="Red,blue,green" data-fouc>
                            </div>
                        </div>
                        <!-- /default input group size -->


                        <!-- Small input group size -->
                        <div class="form-group">
                            <label>Small input group size</label>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-lifebuoy"></i></span>
                                </div>
                                <input type="text" class="form-control tokenfield" value="Red,blue,green" data-fouc>
                            </div>
                        </div>
                        <!-- /small input group size -->

                    </div>
                </div>
            </div>
        </div>
        <!-- /tokenfield inputs sizing -->


        <!-- Tokenfield styling -->
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Validation states</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <!-- Error validation state -->
                        <div class="form-group">
                            <label class="font-weight-semibold text-danger">Invalid state</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" class="form-control tokenfield-danger" value="Red,blue,green" data-fouc>
                                <div class="form-control-feedback text-danger">
                                    <i class="icon-cancel-circle2"></i>
                                </div>
                            </div>
                        </div>
                        <!-- /error validation state -->


                        <!-- Success validation state -->
                        <div class="form-group">
                            <label class="font-weight-semibold text-success">Valid state</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" class="form-control tokenfield-success" value="Red,blue,green" data-fouc>
                                <div class="form-control-feedback text-success">
                                    <i class="icon-checkmark-circle"></i>
                                </div>
                            </div>
                        </div>
                        <!-- /success validation state -->

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Custom colors</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <!-- Custom blue color -->
                        <div class="form-group">
                            <label>Custom blue color</label>
                            <input type="text" class="form-control tokenfield-primary" value="Red,blue,green" data-fouc>
                        </div>
                        <!-- /custom blue color -->


                        <!-- Custom green color -->
                        <div class="form-group">
                            <label>Custom green color</label>
                            <input type="text" class="form-control tokenfield-teal" value="Red,blue,green" data-fouc>
                        </div>
                        <!-- /custom green color -->

                    </div>
                </div>
            </div>
        </div>
        <!-- /tokenfield basic -->



        <!-- Bootstrap tags input -->
        <div class="mb-3 pt-2">
            <h6 class="mb-0 font-weight-semibold">
                Bootstrap Tags Input
            </h6>
            <span class="text-muted d-block">User interface for managing tags</span>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Initialization</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <!-- Default usage -->
                        <div class="mb-3">
                            <h6 class="font-weight-semibold">Default usage</h6>
                            <p class="mb-3">Tags input is a simple and flexible extension with plenty of useful features and support of Twitter Typeahead library. To initialize tags input, you can use both javascript and data attributes.</p>

                            <div class="mb-3">
                                <input type="text" value="Amsterdam,Washington,Sydney,Beijing" class="form-control tags-input" data-fouc>
                            </div>

                            <div class="mb-3">
                                <div class="mb-1">Returned values</div>
                                <pre class="val"><code class="language-javascript">"Amsterdam,Washington,Sydney,Beijing"</code></pre>
                            </div>

                            <div class="mb-4">
                                <div class="mb-1">Returned items</div>
                                <pre class="items"><code class="language-javascript">["Amsterdam","Washington","Sydney","Beijing"]</code></pre>
                            </div>
                        </div>
                        <!-- /default usage -->


                        <!-- Using data attributes -->
                        <div class="mb-3">
                            <h6 class="font-weight-semibold">Using data attributes</h6>
                            <p class="mb-3">Just add <code>data-role="tagsinput"</code> to your input field to automatically change it to a tags input field. <span class="font-weight-semibold">Note:</span> currently tags input supports only default options if intinalized via data attributes.</p>

                            <div class="mb-3">
                                <input type="text" value="Amsterdam,Washington,Sydney" class="form-control" data-role="tagsinput" data-fouc>
                            </div>

                            <div class="mb-3">
                                <div class="mb-1">Returned values</div>
                                <pre class="val"><code class="language-javascript">&nbsp;</code></pre>
                            </div>

                            <div class="mb-3">
                                <div class="mb-1">Returned items</div>
                                <pre class="items"><code class="language-javascript">&nbsp;</code></pre>
                            </div>
                        </div>
                        <!-- /using data attributes -->

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Basic options</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <!-- Maximum tags -->
                        <div class="mb-3">
                            <h6 class="font-weight-semibold">Maximum tags allowed</h6>
                            <p class="mb-3">When set, no more than the given number of tags are allowed to add (default: undefined). When maxTags is reached, a class 'bootstrap-tagsinput-max' is placed on the tagsinput element.</p>

                            <div class="mb-3">
                                <input type="text" value="Amsterdam,Washington,Sydney" class="form-control tagsinput-max-tags" data-fouc>
                            </div>

                            <div class="mb-3">
                                <div class="mb-1">Returned values</div>
                                <pre class="val"><code class="language-javascript">"Amsterdam,Washington,Sydney"</code></pre>
                            </div>

                            <div class="mb-4">
                                <div class="mb-1">Returned items</div>
                                <pre class="items"><code class="language-javascript">["Amsterdam","Washington","Sydney"]</code></pre>
                            </div>
                        </div>
                        <!-- /maximum tags -->


                        <!-- Custom tag class -->
                        <div class="mb-3">
                            <h6 class="font-weight-semibold">Custom tags class</h6>
                            <p class="mb-3">Tag element uses basic <code>.badge</code> element markup and supports all color options available for it. Default color alternative is <code>info</code>, to use another color add proper class to <code>tagClass</code> option.</p>

                            <div class="mb-3">
                                <input type="text" value="Amsterdam,Washington,Sydney" class="form-control tagsinput-custom-tag-class" data-fouc>
                            </div>

                            <div class="mb-3">
                                <div class="mb-1">Returned values</div>
                                <pre class="val"><code class="language-javascript">"Amsterdam,Washington,Sydney"</code></pre>
                            </div>

                            <div class="mb-3">
                                <div class="mb-1">Returned items</div>
                                <pre class="items"><code class="language-javascript">["Amsterdam","Washington","Sydney"]</code></pre>
                            </div>
                        </div>
                        <!-- /maximum tags -->

                    </div>
                </div>
            </div>
        </div>
        <!-- /bootstrap tags input -->


        <!-- Tags input options -->
        <div class="row">
            <div class="col-md-6">

                <!-- Advanced examples -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Advanced examples</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <!-- Typeahead support -->
                        <div class="form-group">
                            <label>Typeahead support</label>
                            <input type="text" value="Washington,Alaska" data-role="tagsinput" class="form-control tagsinput-typeahead" data-fouc>
                        </div>
                        <!-- /typeahead support -->


                        <!-- Categorizing tags -->
                        <div class="form-group">
                            <label>Categorizing tags</label>
                            <input type="text" class="form-control tagsinput-tag-categorizing" data-fouc>
                        </div>
                        <!-- /categorizing tags -->


                        <!-- Objects as tags -->
                        <div class="form-group">
                            <label>Objects as tags</label>
                            <input type="text" class="form-control tagsinput-tag-objects" data-fouc>
                        </div>
                        <!-- /objects as tags -->


                        <!-- Allow dublicates -->
                        <div class="form-group">
                            <label>Allow dublicates</label>
                            <select multiple="multiple" class="form-control tags-input-dublicates" data-fouc>
                                <option value="Amsterdam" selected>Amsterdam</option>
                                <option value="Washington" selected>Washington</option>
                                <option value="Washington" selected>Washington</option>
                            </select>
                        </div>
                        <!-- /allow dublicates -->

                    </div>
                </div>
                <!-- /advanced examples -->

            </div>

            <div class="col-md-6">

                <!-- Tags input methods -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Tags input methods</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <!-- Add tag -->
                        <div class="form-group">
                            <label>Add one tag</label>
                            <div class="input-group">
                                <input type="text" value="Washington,Alaska" class="form-control tagsinput-add-tag" data-fouc>
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-light add-tag-button">Add Beijing</button>
                                </div>
                            </div>
                        </div>
                        <!-- /add tag -->


                        <!-- Remove tag -->
                        <div class="form-group">
                            <label>Remove one tag</label>
                            <div class="input-group">
                                <input type="text" value="Washington,Alaska" class="form-control tagsinput-remove-tag" data-fouc>
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-light remove-tag-button">Remove Sydney</button>
                                </div>
                            </div>
                        </div>
                        <!-- /remove tag -->


                        <!-- Remove all tags -->
                        <div class="form-group">
                            <label>Remove all tags</label>
                            <div class="input-group">
                                <input type="text" value="Washington,Alaska" class="form-control tagsinput-remove-tags" data-fouc>
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-light remove-all-tags-button">Remove all</button>
                                </div>
                            </div>
                        </div>
                        <!-- /remove all tags -->


                        <!-- Destroy tags input -->
                        <div class="form-group">
                            <label>Destroy Tagsinput</label>
                            <div class="input-group">
                                <input type="text" value="Washington,Alaska" class="form-control tagsinput-destroy" data-fouc>
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-light destroy-tagsinput-button">Destroy</button>
                                </div>
                            </div>
                        </div>
                        <!-- /destroy tags input -->

                    </div>
                </div>
                <!-- /tags input methods -->

            </div>
        </div>
        <!-- /tags input options -->

    </div>
    <!-- FIM form_tag_inputs -->










    <!-- INICIO form_dual_listboxes -->
    <div class="content">

        <!-- Basic example -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Basic example</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <p class="mb-3">The dual listbox is created from a select multiple by calling <code>.bootstrapDualListbox(settings);</code> on a selector. The selector can be any element, not just selects. When the method is called on a selector other than a select, then all select childrens are converted into dual list boxes. This example demonstrates <code>single</code> option selection.</p>

                <select multiple="multiple" class="form-control listbox" data-fouc>
                    <option value="option1" selected>Classical mechanics</option>
                    <option value="option2">Electromagnetism</option>
                    <option value="option4">Relativity</option>
                    <option value="option5" selected>Quantum mechanics</option>
                    <option value="option7">Astrophysics</option>
                    <option value="option8" selected>Biophysics</option>
                    <option value="option9">Chemical physics</option>
                    <option value="option10">Econophysics</option>
                    <option value="option11">Geophysics</option>
                    <option value="option12">Medical physics</option>
                    <option value="option13">Physical chemistry</option>
                    <option value="option14" selected>Continuum mechanics</option>
                    <option value="option15">Electrodynamics</option>
                    <option value="option16" selected>Quantum field theory</option>
                    <option value="option17">Scattering theory</option>
                    <option value="option18" selected>Chaos theory</option>
                    <option value="option19" selected>Newton's laws of motion</option>
                    <option value="option20">Thermodynamics</option>
                </select>
            </div>
        </div>
        <!-- /basic example -->


        <!-- Multiple selection -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Multiple selection</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <p class="mb-3">Multiple selection example. By default, only single selection is allowed: once you click on the option, it automatically moves to another box. To disable single selection and turn on multiple, set <code>moveOnSelect</code> option to <code>false</code> in plugin configuration. Defaults to <code>true</code> and this option is forced to <code>true</code> on the Android browser.</p>

                <select multiple="multiple" class="form-control listbox-no-selection" data-fouc>
                    <option value="option1" selected>Classical mechanics</option>
                    <option value="option2">Electromagnetism</option>
                    <option value="option4">Relativity</option>
                    <option value="option5" selected>Quantum mechanics</option>
                    <option value="option7">Astrophysics</option>
                    <option value="option8" selected>Biophysics</option>
                    <option value="option9">Chemical physics</option>
                    <option value="option10">Econophysics</option>
                    <option value="option11">Geophysics</option>
                    <option value="option12">Medical physics</option>
                    <option value="option13">Physical chemistry</option>
                    <option value="option14" selected>Continuum mechanics</option>
                    <option value="option15">Electrodynamics</option>
                    <option value="option16" selected>Quantum field theory</option>
                    <option value="option17">Scattering theory</option>
                    <option value="option18" selected>Chaos theory</option>
                    <option value="option19" selected>Newton's laws of motion</option>
                    <option value="option20">Thermodynamics</option>
                </select>
            </div>
        </div>
        <!-- /multiple selection -->


        <!-- Filtered results -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Filtered results</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <p class="mb-3">The following example demonstrates initialization of the dual listbox with a filter for the non selected elements, currently from 7 to 12. This can be applied only if <code>showFilterInputs</code> is set to <code>true</code>. Using <code>selectedFilter</code> option, listbox will filter selected elements only. You can use "Display all" button as a filter reset.</p>

                <select multiple="multiple" class="form-control listbox-filtered-results" data-fouc>
                    <option value="option1">Classical mechanics</option>
                    <option value="option2" selected>Electromagnetism</option>
                    <option value="option3">Relativity</option>
                    <option value="option4">Quantum mechanics</option>
                    <option value="option5">Astrophysics</option>
                    <option value="option6">Biophysics</option>
                    <option value="option7">Chemical physics</option>
                    <option value="option8">Econophysics</option>
                    <option value="option9">Geophysics</option>
                    <option value="option10">Medical physics</option>
                    <option value="option11">Physical chemistry</option>
                    <option value="option12" selected>Continuum mechanics</option>
                    <option value="option13">Electrodynamics</option>
                    <option value="option14">Quantum field theory</option>
                    <option value="option15">Scattering theory</option>
                    <option value="option16">Chaos theory</option>
                    <option value="option17">Newton's laws of motion</option>
                    <option value="option18">Thermodynamics</option>
                </select>
            </div>
        </div>
        <!-- /filtered results -->


        <!-- Disable filter -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Disable filter</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <p class="mb-3">The following example demonstrates listbox with disabled filter input. By default, filter input field is always visible, unless <code>showFilterInputs</code> option is set to <code>false</code>. Please note: if false, all additional filter options such as filtered results will be disabled, but all plugin options related to selects will remain available.</p>

                <select multiple="multiple" class="form-control listbox-filter-disabled" data-fouc>
                    <option value="option1" selected>Classical mechanics</option>
                    <option value="option2">Electromagnetism</option>
                    <option value="option4">Relativity</option>
                    <option value="option5" selected>Quantum mechanics</option>
                    <option value="option7">Astrophysics</option>
                    <option value="option8" selected>Biophysics</option>
                    <option value="option9">Chemical physics</option>
                    <option value="option10">Econophysics</option>
                    <option value="option11">Geophysics</option>
                    <option value="option12">Medical physics</option>
                    <option value="option13">Physical chemistry</option>
                    <option value="option14" selected>Continuum mechanics</option>
                    <option value="option15">Electrodynamics</option>
                    <option value="option16" selected>Quantum field theory</option>
                    <option value="option17">Scattering theory</option>
                    <option value="option18" selected>Chaos theory</option>
                    <option value="option19" selected>Newton's laws of motion</option>
                    <option value="option20">Thermodynamics</option>
                </select>
            </div>
        </div>
        <!-- /disable filter -->


        <!-- Control boxes height -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Control boxes height</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <p class="mb-3">This example demonstrates ability to change the minimal height of the generated dual listbox. Default listbox height is <code>200px</code>, in this example the height is increased up to <code>300px</code> using <code>selectorMinimalHeight</code> option. This value is applied to the list itself, but not to the whole container with other elements.</p>

                <select multiple="multiple" class="form-control listbox-tall" data-fouc>
                    <option value="option1" selected>Classical mechanics</option>
                    <option value="option2">Electromagnetism</option>
                    <option value="option4">Relativity</option>
                    <option value="option5" selected>Quantum mechanics</option>
                    <option value="option7">Astrophysics</option>
                    <option value="option8" selected>Biophysics</option>
                    <option value="option9">Chemical physics</option>
                    <option value="option10">Econophysics</option>
                    <option value="option11">Geophysics</option>
                    <option value="option12">Medical physics</option>
                    <option value="option13">Physical chemistry</option>
                    <option value="option14" selected>Continuum mechanics</option>
                    <option value="option15">Electrodynamics</option>
                    <option value="option16" selected>Quantum field theory</option>
                    <option value="option17">Scattering theory</option>
                    <option value="option18" selected>Chaos theory</option>
                    <option value="option19" selected>Newton's laws of motion</option>
                    <option value="option20">Thermodynamics</option>
                </select>
            </div>
        </div>
        <!-- /control boxes height -->


        <!-- Custom text support -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Custom text support</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <p class="mb-3">This example demonstrates how custom text or language can be used in dual listbox controls. All these text labels and placeholders are fully editable through specified options, such as: <code>infoText</code>, <code>infoTextFiltered</code>, <code>infoTextEmpty</code>, <code>filterPlaceHolder</code> etc.</p>

                <select multiple="multiple" class="form-control listbox-custom-text" data-fouc>
                    <option value="option1" selected>Classical mechanics</option>
                    <option value="option2">Electromagnetism</option>
                    <option value="option4">Relativity</option>
                    <option value="option5" selected>Quantum mechanics</option>
                    <option value="option7">Astrophysics</option>
                    <option value="option8" selected>Biophysics</option>
                    <option value="option9">Chemical physics</option>
                    <option value="option10">Econophysics</option>
                    <option value="option11">Geophysics</option>
                    <option value="option12">Medical physics</option>
                    <option value="option13">Physical chemistry</option>
                    <option value="option14" selected>Continuum mechanics</option>
                    <option value="option15">Electrodynamics</option>
                    <option value="option16" selected>Quantum field theory</option>
                    <option value="option17">Scattering theory</option>
                    <option value="option18" selected>Chaos theory</option>
                    <option value="option19" selected>Newton's laws of motion</option>
                    <option value="option20">Thermodynamics</option>
                </select>
            </div>
        </div>
        <!-- /custom text support -->


        <!-- Add options dynamically -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Adding options dynamically</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <p class="mb-3">The options must be added to/removed from the original select. Note that the <code>bootstrapDualListbox.refresh</code> event must be triggered on it after manipulating the options. If there are some highlighted options in the lists, then triggering the <code>bootstrapDualListbox.refresh</code> event with the optional <code>true</code> parameter results the highlights to be removed.</p>

                <div class="mb-3">
                    <select multiple="multiple" class="form-control listbox-dynamic-options" data-fouc>
                        <option value="option1" selected>Classical mechanics</option>
                        <option value="option2">Electromagnetism</option>
                        <option value="option4">Relativity</option>
                        <option value="option5" selected>Quantum mechanics</option>
                        <option value="option7">Astrophysics</option>
                        <option value="option8" selected>Biophysics</option>
                        <option value="option9">Chemical physics</option>
                        <option value="option10">Econophysics</option>
                        <option value="option11">Geophysics</option>
                        <option value="option12">Medical physics</option>
                        <option value="option13">Physical chemistry</option>
                        <option value="option14" selected>Continuum mechanics</option>
                        <option value="option15">Electrodynamics</option>
                        <option value="option16" selected>Quantum field theory</option>
                        <option value="option17">Scattering theory</option>
                        <option value="option18" selected>Chaos theory</option>
                        <option value="option19" selected>Newton's laws of motion</option>
                        <option value="option20">Thermodynamics</option>
                    </select>
                </div>

                <button type="button" class="btn btn-primary listbox-add">Add options</button>
                <button type="button" class="btn btn-primary listbox-add-clear">Add with clearing highlights</button>
            </div>
        </div>
        <!-- /add options dynamically -->

    </div>
    <!-- FIM form_dual_listboxes -->







    <!-- INICIO form_validation -->
    <div class="content">

        <!-- Form validation -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Form validation</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <p class="mb-4">Validate.js makes simple clientside form validation easy, whilst still offering plenty of customization options. The plugin comes bundled with a useful set of validation methods, including URL and email validation, while providing an API to write your own methods. All bundled methods come with default error messages in english and translations into 37 other languages. <strong>Note:</strong> <code>success</code> callback is configured for demo purposes only and can be removed in validation setup.</p>

                <form class="form-validate-jquery" action="#">
                    <fieldset class="mb-3">
                        <legend class="text-uppercase font-size-sm font-weight-bold">Basic inputs</legend>

                        <!-- Basic text input -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Basic text input <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="text" name="basic" class="form-control" required placeholder="Text input validation">
                            </div>
                        </div>
                        <!-- /basic text input -->


                        <!-- Input with icons -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Input with icon <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <div class="form-group-feedback form-group-feedback-right">
                                    <input type="text" name="with_icon" class="form-control" required placeholder="Text input with icon validation">
                                    <div class="form-control-feedback">
                                        <i class="icon-droplets"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /input with icons -->


                        <!-- Input group -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Input group <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon-mention"></i></span>
                                    </div>
                                    <input type="text" name="input_group" class="form-control" required placeholder="Input group validation">
                                </div>
                            </div>
                        </div>
                        <!-- /input group -->


                        <!-- Password field -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Password field <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="password" name="password" id="password" class="form-control" required placeholder="Minimum 5 characters allowed">
                            </div>
                        </div>
                        <!-- /password field -->


                        <!-- Repeat password -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Repeat password <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="password" name="repeat_password" class="form-control" required placeholder="Try different password">
                            </div>
                        </div>
                        <!-- /repeat password -->


                        <!-- Email field -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Email field <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="email" name="email" class="form-control" id="email" required placeholder="Enter a valid email address">
                            </div>
                        </div>
                        <!-- /email field -->


                        <!-- Repeat email -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Repeat email <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="email" name="repeat_email" class="form-control" required placeholder="Enter a valid email address">
                            </div>
                        </div>
                        <!-- /repeat email -->


                        <!-- Minimum characters -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Minimum characters <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="text" name="minimum_characters" class="form-control" required placeholder="Enter at least 10 characters">
                            </div>
                        </div>
                        <!-- /minimum characters -->


                        <!-- Maximum characters -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Maximum characters <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="text" name="maximum_characters" class="form-control" required placeholder="Enter 10 characters maximum">
                            </div>
                        </div>
                        <!-- /maximum characters -->


                        <!-- Minimum number -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Minimum number <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="text" name="minimum_number" class="form-control" required placeholder="Enter a value greater than or equal to 10">
                            </div>
                        </div>
                        <!-- /minimum number -->


                        <!-- Maximum number -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Maximum number <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="text" name="maximum_number" class="form-control" required placeholder="Please enter a value less than or equal to 10">
                            </div>
                        </div>
                        <!-- /maximum number -->


                        <!-- Basic textarea -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Basic textarea <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <textarea rows="5" cols="5" name="textarea" class="form-control" required placeholder="Default textarea"></textarea>
                            </div>
                        </div>
                        <!-- /basic textarea -->

                    </fieldset>

                    <fieldset class="mb-3">
                        <legend class="text-uppercase font-size-sm font-weight-bold">Advanced inputs</legend>

                        <!-- Number range -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Number range <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="text" name="number_range" class="form-control" required placeholder="Enter a value between 10 and 20">
                            </div>
                        </div>
                        <!-- /number range -->


                        <!-- Touchspin spinners -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Touchspin spinner <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="text" name="touchspin" value="" required class="form-control touchspin-postfix" placeholder="Not valid if empty">
                            </div>
                        </div>
                        <!-- /touchspin spinners -->


                        <!-- Custom message -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Custom message <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="text" name="custom" class="form-control" required placeholder="Custom error message">
                            </div>
                        </div>
                        <!-- /custom message -->


                        <!-- URL validation -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">URL validation <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="text" name="url" class="form-control" required placeholder="Enter a valid URL address">
                            </div>
                        </div>
                        <!-- /url validation -->


                        <!-- Date validation -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Date validation <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="text" name="date" class="form-control" required placeholder="April, 2014 or any other date format">
                            </div>
                        </div>
                        <!-- /date validation -->


                        <!-- ISO date validation -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">ISO date validation <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="text" name="date_iso" class="form-control" required placeholder="YYYY/MM/DD or any other ISO date format">
                            </div>
                        </div>
                        <!-- /iso date validation -->


                        <!-- Numbers only -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Numbers only <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="text" name="numbers" class="form-control" required placeholder="Enter decimal number only">
                            </div>
                        </div>
                        <!-- /numbers only -->


                        <!-- Digits only -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Digits only <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="text" name="digits" class="form-control" required placeholder="Enter digits only">
                            </div>
                        </div>
                        <!-- /digits only -->


                        <!-- Credit card validation -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Credit card validation <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="text" name="card" class="form-control" required placeholder="Enter credit card number. Try 446-667-651">
                            </div>
                        </div>
                        <!-- /credit card validation -->


                        <!-- Basic file uploader -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Basic file uploader <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="file" name="unstyled_file" class="form-control" required>
                            </div>
                        </div>
                        <!-- /basic file uploader -->


                        <!-- Styled file uploader -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Styled file uploader <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="file" name="styled_file" class="form-input-styled" required data-fouc>
                            </div>
                        </div>
                        <!-- /styled file uploader -->


                        <!-- Basic select -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Basic select <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <select name="default_select" class="form-control" required>
                                    <option value="">Choose an option</option> 
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="CA">California</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="KY">Kentucky</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <!-- /basic select -->


                        <!-- Styled select -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Styled select <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <select name="styled_select" class="form-control form-input-styled" required data-fouc>
                                    <option value="">Choose an option</option> 
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="CA">California</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="KY">Kentucky</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <!-- /styled asic select -->


                        <!-- Select2 select -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Select2 select <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <select name="select2" data-placeholder="Select a State..." class="form-control form-control-select2" required data-fouc>
                                    <option></option>
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <!-- /select2 select -->


                        <!-- Multiple select -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Multiple select <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <select name="default_multiple_select" class="form-control" multiple required>
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <!-- /multiple select -->

                    </fieldset>

                    <fieldset class="mb-3">
                        <legend class="text-uppercase font-size-sm font-weight-bold">Checkboxes and radios</legend>

                        <!-- Basic single checkbox -->
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Basic single checkbox <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="single_basic_checkbox" required>
                                        Accept our terms
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /basic singlecheckbox -->


                        <!-- Basic checkbox group -->
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Basic checkbox group <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="basic_checkbox" required>
                                        Duis eget nibh purus
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="basic_checkbox">
                                        Maecenas non nulla ac nunc
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="basic_checkbox">
                                        Maecenas egestas tristique
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /basic checkbox group -->


                        <!-- Inline checkbox group -->
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Basic inline checkbox group <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="basic_inline_checkbox" required>
                                        Duis eget nibh purus
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="basic_inline_checkbox">
                                        Maecenas non nulla ac nunc
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /inline checkbox group -->


                        <!-- Basic radio group -->
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Basic radio group <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="basic_radio" required>
                                        Cras leo turpis malesuada eget
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="basic_radio">
                                        Maecenas congue justo vel ipsum
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /basic radio group -->


                        <!-- Basic inline radio group -->
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Basic inline radio group <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="basic_radio_group" required>
                                        Cras leo turpis malesuada eget
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="basic_radio_group">
                                        Maecenas congue justo vel ipsum
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /basic inline radio group -->


                        <hr class="mb-4">


                        <!-- Single styled checkbox -->
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Single styled checkbox <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="single_styled_checkbox" class="form-input-styled" required data-fouc>
                                        Accept our terms
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /single styled checkbox -->


                        <!-- Styled checkbox group -->
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Styled checkbox group <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="styled_checkbox" class="form-input-styled" required data-fouc>
                                        Duis eget nibh purus
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="styled_checkbox" class="form-input-styled" data-fouc>
                                        Maecenas non nulla ac nunc
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="styled_checkbox" class="form-input-styled" data-fouc>
                                        Maecenas egestas tristique
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /styled checkbox group -->


                        <!-- Inline checkbox group -->
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Inline checkbox group <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="styled_inline_checkbox" class="form-input-styled" required data-fouc>
                                        Duis eget nibh purus
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="styled_inline_checkbox" class="form-input-styled" data-fouc>
                                        Maecenas non nulla ac nunc
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /inline checkbox group -->


                        <!-- Styled radio group -->
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Styled radio group <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="styled_radio" class="form-input-styled" required data-fouc>
                                        Cras leo turpis malesuada eget
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="styled_radio" class="form-input-styled" data-fouc>
                                        Maecenas congue justo vel ipsum
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /styled radio group -->


                        <!-- Styled inline radio group -->
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Styled inline radio group <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" name="styled_inline_radio" class="form-input-styled" required data-fouc>
                                        Cras leo turpis malesuada eget
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" name="styled_inline_radio" class="form-input-styled" data-fouc>
                                        Maecenas congue justo vel ipsum
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /styled inline radio group -->

                    </fieldset>

                    <fieldset>
                        <legend class="text-uppercase font-size-sm font-weight-bold">Switcher components</legend>

                        <!-- Switchery single -->
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Swichery single <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <div class="form-check form-check-switchery switchery-sm">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="switchery_single" class="form-input-switchery" required data-fouc>
                                        Accept our terms
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /switchery single -->


                        <!-- Switchery group -->
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Swichery group <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <div class="form-check form-check-switchery switchery-sm">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="switchery_group" class="form-input-switchery" required data-fouc>
                                        Duis eget nibh purus
                                    </label>
                                </div>

                                <div class="form-check form-check-switchery switchery-sm">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="switchery_group" class="form-input-switchery" data-fouc>
                                        Maecenas non nulla ac nunc
                                    </label>
                                </div>

                                <div class="form-check form-check-switchery switchery-sm">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="switchery_group" class="form-input-switchery" data-fouc>
                                        Maecenas egestas tristique
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /switchery group -->


                        <!-- Inline switchery group -->
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Inline swichery group <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <div class="form-check form-check-inline form-check-switchery switchery-sm">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="inline_switchery_group" class="form-input-switchery" required data-fouc>
                                        Duis eget nibh purus
                                    </label>
                                </div>

                                <div class="form-check form-check-inline form-check-switchery switchery-sm">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="inline_switchery_group" class="form-input-switchery" data-fouc>
                                        Maecenas egestas tristique
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /inline switchery group -->


                        <hr>


                        <!-- Switch single -->
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Switch single <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <div class="form-check form-check-switch form-check-switch-left">
                                    <label class="form-check-label d-flex align-items-center">
                                        <input type="checkbox" name="switch_single" data-on-text="Yes" data-off-text="No" class="form-input-switch" required>
                                        Accept our terms
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /switch single -->


                        <!-- Switch group -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Switch group <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <div class="form-check form-check-switch form-check-switch-left">
                                    <label class="form-check-label d-flex align-items-center">
                                        <input type="checkbox" name="switch_group" class="form-input-switch" required>
                                        Duis eget nibh purus
                                    </label>
                                </div>

                                <div class="form-check form-check-switch form-check-switch-left">
                                    <label class="form-check-label d-flex align-items-center">
                                        <input type="checkbox" name="switch_group" class="form-input-switch">
                                        Maecenas non nulla ac nunc
                                    </label>
                                </div>

                                <div class="form-check form-check-switch form-check-switch-left">
                                    <label class="form-check-label d-flex align-items-center">
                                        <input type="checkbox" name="switch_group" class="form-input-switch">
                                        Maecenas egestas tristique
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /switch group -->


                        <!-- Inline switch group -->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">Inline switch group <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <div class="form-check form-check-inline form-check-switch form-check-switch-left">
                                    <label class="form-check-label align-items-center">
                                        <input type="checkbox" name="inline_switch_group" class="form-input-switch" required>
                                        Duis eget nibh purus
                                    </label>
                                </div>

                                <div class="form-check form-check-inline form-check-switch form-check-switch-left">
                                    <label class="form-check-label align-items-center">
                                        <input type="checkbox" name="inline_switch_group" class="form-input-switch">
                                        Maecenas non nulla ac nunc
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /inline switch group -->

                    </fieldset>

                    <div class="d-flex justify-content-end align-items-center">
                        <button type="reset" class="btn btn-light" id="reset">Reset <i class="icon-reload-alt ml-2"></i></button>
                        <button type="submit" class="btn btn-primary ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /form validation -->

    </div>
    <!-- FIM form_validation -->









    <!-- INICIO form_wizard -->
    <div class="content">

        <!-- Basic setup -->
        <div class="card">
            <div class="card-header bg-white header-elements-inline">
                <h6 class="card-title">Basic example</h6>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <form class="wizard-form steps-basic" action="#" data-fouc>
                <h6>Personal data</h6>
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select location:</label>
                                <select name="location" data-placeholder="Select position" class="form-control form-control-select2" data-fouc>
                                    <option></option>
                                    <optgroup label="North America">
                                        <option value="1">United States</option>
                                        <option value="2">Canada</option>
                                    </optgroup>
                                    <optgroup label="Latin America">
                                        <option value="3">Chile</option>
                                        <option value="4">Argentina</option>
                                        <option value="5">Colombia</option>
                                        <option value="6">Peru</option>
                                    </optgroup>
                                    <optgroup label="Europe">
                                        <option value="8">Croatia</option>
                                        <option value="9">Hungary</option>
                                        <option value="10">Ukraine</option>
                                        <option value="11">Greece</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select position:</label>
                                <select name="position" data-placeholder="Select position" class="form-control form-control-select2" data-fouc>
                                    <option></option>
                                    <optgroup label="Developer Relations">
                                        <option value="1">Sales Engineer</option>
                                        <option value="2">Ads Solutions Consultant</option>
                                        <option value="3">Technical Solutions Consultant</option>
                                        <option value="4">Business Intern</option>
                                    </optgroup>

                                    <optgroup label="Engineering &amp; Design">
                                        <option value="5">Interaction Designer</option>
                                        <option value="6">Technical Program Manager</option>
                                        <option value="7">Software Engineer</option>
                                        <option value="8">Information Security Engineer</option>
                                    </optgroup>

                                    <optgroup label="Marketing &amp; Communications">
                                        <option value="13">Media Outreach Manager</option>
                                        <option value="14">Research Manager</option>
                                        <option value="15">Marketing Intern</option>
                                        <option value="16">Business Intern</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Applicant name:</label>
                                <input type="text" name="name" class="form-control" placeholder="John Doe">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email address:</label>
                                <input type="email" name="email" class="form-control" placeholder="your@email.com">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone #:</label>
                                <input type="text" name="tel" class="form-control" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label>Date of birth:</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="birth-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                            <option></option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="birth-day" data-placeholder="Day" class="form-control form-control-select2" data-fouc>
                                            <option></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="...">...</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="birth-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                            <option></option>
                                            <option value="1">1980</option>
                                            <option value="2">1981</option>
                                            <option value="3">1982</option>
                                            <option value="4">1983</option>
                                            <option value="5">1984</option>
                                            <option value="6">1985</option>
                                            <option value="7">1986</option>
                                            <option value="8">1987</option>
                                            <option value="9">1988</option>
                                            <option value="10">1989</option>
                                            <option value="11">1990</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <h6>Your education</h6>
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>University:</label>
                                <input type="text" name="university" placeholder="University name" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Country:</label>
                                <select name="university-country" data-placeholder="Choose a Country..." class="form-control form-control-select2" data-fouc>
                                    <option></option> 
                                    <option value="1">United States</option> 
                                    <option value="2">France</option> 
                                    <option value="3">Germany</option> 
                                    <option value="4">Spain</option> 
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Degree level:</label>
                                <input type="text" name="degree-level" placeholder="Bachelor, Master etc." class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Specialization:</label>
                                <input type="text" name="specialization" placeholder="Design, Development etc." class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>From:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                    <option></option>
                                                    <option value="January">January</option> 
                                                    <option value="...">...</option> 
                                                    <option value="December">December</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                    <option></option> 
                                                    <option value="1995">1995</option> 
                                                    <option value="...">...</option> 
                                                    <option value="1980">1980</option> 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label>To:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                    <option></option>
                                                    <option value="January">January</option> 
                                                    <option value="...">...</option> 
                                                    <option value="December">December</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                    <option></option> 
                                                    <option value="1995">1995</option> 
                                                    <option value="...">...</option> 
                                                    <option value="1980">1980</option> 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Language of education:</label>
                                <input type="text" name="education-language" placeholder="English, German etc." class="form-control">
                            </div>
                        </div>
                    </div>
                </fieldset>

                <h6>Your experience</h6>
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company:</label>
                                <input type="text" name="experience-company" placeholder="Company name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Position:</label>
                                <input type="text" name="experience-position" placeholder="Company name" class="form-control">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>From:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                    <option></option>
                                                    <option value="January">January</option> 
                                                    <option value="...">...</option> 
                                                    <option value="December">December</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                    <option></option> 
                                                    <option value="1995">1995</option> 
                                                    <option value="...">...</option> 
                                                    <option value="1980">1980</option> 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label>To:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                    <option></option>
                                                    <option value="January">January</option> 
                                                    <option value="...">...</option> 
                                                    <option value="December">December</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                    <option></option> 
                                                    <option value="1995">1995</option> 
                                                    <option value="...">...</option> 
                                                    <option value="1980">1980</option> 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Brief description:</label>
                                <textarea name="experience-description" rows="4" cols="4" placeholder="Tasks and responsibilities" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <label class="d-block">Recommendations:</label>
                                <input name="recommendations" type="file" class="form-input-styled" data-fouc>
                                <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <h6>Additional info</h6>
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="d-block">Applicant resume:</label>
                                <input type="file" name="resume" class="form-input-styled" data-fouc>
                                <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Where did you find us?</label>
                                <select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc>
                                    <option></option> 
                                    <option value="monster">Monster.com</option> 
                                    <option value="linkedin">LinkedIn</option> 
                                    <option value="google">Google</option> 
                                    <option value="adwords">Google AdWords</option> 
                                    <option value="other">Other source</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Availability:</label>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                        Immediately
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                        1 - 2 weeks
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                        3 - 4 weeks
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                        More than 1 month
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Additional information:</label>
                                <textarea name="additional-info" rows="5" cols="5" placeholder="If you want to add any info, do it here." class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <!-- /basic setup -->


        <!-- Wizard with validation -->
        <div class="card">
            <div class="card-header bg-white header-elements-inline">
                <h6 class="card-title">Wizard with validation</h6>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <form class="wizard-form steps-validation" action="#" data-fouc>
                <h6>Personal data</h6>
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select location: <span class="text-danger">*</span></label>
                                <select name="location" data-placeholder="Select position" class="form-control form-control-select2 required" data-fouc>
                                    <option></option>
                                    <optgroup label="North America">
                                        <option value="1">United States</option>
                                        <option value="2">Canada</option>
                                    </optgroup>

                                    <optgroup label="Latin America">
                                        <option value="3">Chile</option>
                                        <option value="4">Argentina</option>
                                        <option value="5">Colombia</option>
                                        <option value="6">Peru</option>
                                    </optgroup>

                                    <optgroup label="Europe">
                                        <option value="8">Croatia</option>
                                        <option value="9">Hungary</option>
                                        <option value="10">Ukraine</option>
                                        <option value="11">Greece</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select position: <span class="text-danger">*</span></label>
                                <select name="position" data-placeholder="Select position" class="form-control form-control-select2 required" data-fouc>
                                    <option></option>
                                    <optgroup label="Developer Relations">
                                        <option value="1">Sales Engineer</option>
                                        <option value="2">Ads Solutions Consultant</option>
                                        <option value="3">Technical Solutions Consultant</option>
                                        <option value="4">Business Intern</option>
                                    </optgroup>

                                    <optgroup label="Engineering &amp; Design">
                                        <option value="5">Interaction Designer</option>
                                        <option value="6">Technical Program Manager</option>
                                        <option value="7">Software Engineer</option>
                                        <option value="8">Information Security Engineer</option>
                                    </optgroup>

                                    <optgroup label="Marketing &amp; Communications">
                                        <option value="13">Media Outreach Manager</option>
                                        <option value="14">Research Manager</option>
                                        <option value="15">Marketing Intern</option>
                                        <option value="16">Business Intern</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Applicant name: <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control required" placeholder="John Doe">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email address: <span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control required" placeholder="your@email.com">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone #:</label>
                                <input type="text" name="tel" class="form-control" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label>Date of birth:</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="birth-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                            <option></option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="birth-day" data-placeholder="Day" class="form-control form-control-select2" data-fouc>
                                            <option></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="...">...</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="birth-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                            <option></option>
                                            <option value="1">1980</option>
                                            <option value="2">1981</option>
                                            <option value="3">1982</option>
                                            <option value="4">1983</option>
                                            <option value="5">1984</option>
                                            <option value="6">1985</option>
                                            <option value="7">1986</option>
                                            <option value="8">1987</option>
                                            <option value="9">1988</option>
                                            <option value="10">1989</option>
                                            <option value="11">1990</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <h6>Your education</h6>
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>University: <span class="text-danger">*</span></label>
                                <input type="text" name="university" placeholder="University name" class="form-control required">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Country:</label>
                                <select name="university-country" data-placeholder="Choose a Country..." class="form-control form-control-select2" data-fouc>
                                    <option></option> 
                                    <option value="1">United States</option> 
                                    <option value="2">France</option> 
                                    <option value="3">Germany</option> 
                                    <option value="4">Spain</option> 
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Degree level: <span class="text-danger">*</span></label>
                                <input type="text" name="degree-level" placeholder="Bachelor, Master etc." class="form-control required">
                            </div>

                            <div class="form-group">
                                <label>Specialization:</label>
                                <input type="text" name="specialization" placeholder="Design, Development etc." class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>From:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                    <option></option>
                                                    <option value="January">January</option> 
                                                    <option value="...">...</option> 
                                                    <option value="December">December</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                    <option></option> 
                                                    <option value="1995">1995</option> 
                                                    <option value="...">...</option> 
                                                    <option value="1980">1980</option> 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label>To:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                    <option></option>
                                                    <option value="January">January</option> 
                                                    <option value="...">...</option> 
                                                    <option value="December">December</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                    <option></option> 
                                                    <option value="1995">1995</option> 
                                                    <option value="...">...</option> 
                                                    <option value="1980">1980</option> 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Language of education:</label>
                                <input type="text" name="education-language" placeholder="English, German etc." class="form-control">
                            </div>
                        </div>
                    </div>
                </fieldset>

                <h6>Your experience</h6>
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company: <span class="text-danger">*</span></label>
                                <input type="text" name="experience-company" placeholder="Company name" class="form-control required">
                            </div>

                            <div class="form-group">
                                <label>Position: <span class="text-danger">*</span></label>
                                <input type="text" name="experience-position" placeholder="Company name" class="form-control required">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>From:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                    <option></option>
                                                    <option value="January">January</option> 
                                                    <option value="...">...</option> 
                                                    <option value="December">December</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                    <option></option> 
                                                    <option value="1995">1995</option> 
                                                    <option value="...">...</option> 
                                                    <option value="1980">1980</option> 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label>To:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                    <option></option>
                                                    <option value="January">January</option> 
                                                    <option value="...">...</option> 
                                                    <option value="December">December</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                    <option></option> 
                                                    <option value="1995">1995</option> 
                                                    <option value="...">...</option> 
                                                    <option value="1980">1980</option> 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Brief description:</label>
                                <textarea name="experience-description" rows="4" cols="4" placeholder="Tasks and responsibilities" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <label class="d-block">Recommendations:</label>
                                <input name="recommendations" type="file" class="form-input-styled" data-fouc>
                                <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <h6>Additional info</h6>
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="d-block">Applicant resume:</label>
                                <input type="file" name="resume" class="form-input-styled" data-fouc>
                                <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Where did you find us? <span class="text-danger">*</span></label>
                                <select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2 required" data-fouc>
                                    <option></option> 
                                    <option value="monster">Monster.com</option> 
                                    <option value="linkedin">LinkedIn</option> 
                                    <option value="google">Google</option> 
                                    <option value="adwords">Google AdWords</option> 
                                    <option value="other">Other source</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Availability: <span class="text-danger">*</span></label>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="availability" class="form-input-styled required" data-fouc>
                                        Immediately
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                        1 - 2 weeks
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                        3 - 4 weeks
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                        More than 1 month
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Additional information:</label>
                                <textarea name="additional-info" rows="5" cols="5" placeholder="If you want to add any info, do it here." class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <!-- /wizard with validation -->


        <!-- Saving state -->
        <div class="card">
            <div class="card-header bg-white header-elements-inline">
                <h6 class="card-title">Saving wizard state</h6>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <form class="wizard-form steps-state-saving" action="#" data-fouc>
                <h6>Personal data</h6>
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select location:</label>
                                <select name="location" data-placeholder="Select position" class="form-control form-control-select2" data-fouc>
                                    <option></option>
                                    <optgroup label="North America">
                                        <option value="1">United States</option>
                                        <option value="2">Canada</option>
                                    </optgroup>

                                    <optgroup label="Latin America">
                                        <option value="3">Chile</option>
                                        <option value="4">Argentina</option>
                                        <option value="5">Colombia</option>
                                        <option value="6">Peru</option>
                                    </optgroup>

                                    <optgroup label="Europe">
                                        <option value="8">Croatia</option>
                                        <option value="9">Hungary</option>
                                        <option value="10">Ukraine</option>
                                        <option value="11">Greece</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select position:</label>
                                <select name="position" data-placeholder="Select position" class="form-control form-control-select2" data-fouc>
                                    <option></option>
                                    <optgroup label="Developer Relations">
                                        <option value="1">Sales Engineer</option>
                                        <option value="2">Ads Solutions Consultant</option>
                                        <option value="3">Technical Solutions Consultant</option>
                                        <option value="4">Business Intern</option>
                                    </optgroup>

                                    <optgroup label="Engineering &amp; Design">
                                        <option value="5">Interaction Designer</option>
                                        <option value="6">Technical Program Manager</option>
                                        <option value="7">Software Engineer</option>
                                        <option value="8">Information Security Engineer</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Applicant name:</label>
                                <input type="text" name="name" class="form-control" placeholder="John Doe">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email address:</label>
                                <input type="email" name="email" class="form-control" placeholder="your@email.com">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone #:</label>
                                <input type="text" name="tel" class="form-control" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label>Date of birth:</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="birth-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                            <option></option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="birth-day" data-placeholder="Day" class="form-control form-control-select2" data-fouc>
                                            <option></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="...">...</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="birth-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                            <option></option>
                                            <option value="1">1980</option>
                                            <option value="2">1981</option>
                                            <option value="3">1982</option>
                                            <option value="4">1983</option>
                                            <option value="5">1984</option>
                                            <option value="6">1985</option>
                                            <option value="7">1986</option>
                                            <option value="8">1987</option>
                                            <option value="9">1988</option>
                                            <option value="10">1989</option>
                                            <option value="11">1990</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <h6>Your education</h6>
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>University:</label>
                                <input type="text" name="university" placeholder="University name" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Country:</label>
                                <select name="university-country" data-placeholder="Choose a Country..." class="form-control form-control-select2" data-fouc>
                                    <option></option> 
                                    <option value="1">United States</option> 
                                    <option value="2">France</option> 
                                    <option value="3">Germany</option> 
                                    <option value="4">Spain</option> 
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Degree level:</label>
                                <input type="text" name="degree-level" placeholder="Bachelor, Master etc." class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Specialization:</label>
                                <input type="text" name="specialization" placeholder="Design, Development etc." class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>From:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                    <option></option>
                                                    <option value="January">January</option> 
                                                    <option value="...">...</option> 
                                                    <option value="December">December</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                    <option></option> 
                                                    <option value="1995">1995</option> 
                                                    <option value="...">...</option> 
                                                    <option value="1980">1980</option> 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label>To:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                    <option></option>
                                                    <option value="January">January</option> 
                                                    <option value="...">...</option> 
                                                    <option value="December">December</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                    <option></option> 
                                                    <option value="1995">1995</option> 
                                                    <option value="...">...</option> 
                                                    <option value="1980">1980</option> 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Language of education:</label>
                                <input type="text" name="education-language" placeholder="English, German etc." class="form-control">
                            </div>
                        </div>
                    </div>
                </fieldset>

                <h6>Your experience</h6>
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company:</label>
                                <input type="text" name="experience-company" placeholder="Company name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Position:</label>
                                <input type="text" name="experience-position" placeholder="Company name" class="form-control">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>From:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                    <option></option>
                                                    <option value="January">January</option> 
                                                    <option value="...">...</option> 
                                                    <option value="December">December</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                    <option></option> 
                                                    <option value="1995">1995</option> 
                                                    <option value="...">...</option> 
                                                    <option value="1980">1980</option> 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label>To:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                    <option></option>
                                                    <option value="January">January</option> 
                                                    <option value="...">...</option> 
                                                    <option value="December">December</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                    <option></option> 
                                                    <option value="1995">1995</option> 
                                                    <option value="...">...</option> 
                                                    <option value="1980">1980</option> 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Brief description:</label>
                                <textarea name="experience-description" rows="4" cols="4" placeholder="Tasks and responsibilities" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <label class="d-block">Recommendations:</label>
                                <input name="recommendations" type="file" class="form-input-styled" data-fouc>
                                <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <h6>Additional info</h6>
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="d-block">Applicant resume:</label>
                                <input type="file" name="resume" class="form-input-styled" data-fouc>
                                <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Where did you find us?</label>
                                <select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc>
                                    <option></option> 
                                    <option value="monster">Monster.com</option> 
                                    <option value="linkedin">LinkedIn</option> 
                                    <option value="google">Google</option> 
                                    <option value="adwords">Google AdWords</option> 
                                    <option value="other">Other source</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Availability:</label>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                        Immediately
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                        1 - 2 weeks
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                        3 - 4 weeks
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                        More than 1 month
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Additional information:</label>
                                <textarea name="additional-info" rows="5" cols="5" placeholder="If you want to add any info, do it here." class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <!-- /saving state -->


        <!-- Starting step -->
        <div class="card">
            <div class="card-header bg-white header-elements-inline">
                <h6 class="card-title">Change starting step</h6>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <form class="wizard-form steps-starting-step" action="#" data-fouc>
                <h6>Personal data</h6>
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select location:</label>
                                <select name="location" data-placeholder="Select position" class="form-control form-control-select2" data-fouc>
                                    <option></option>
                                    <optgroup label="North America">
                                        <option value="1">United States</option>
                                        <option value="2">Canada</option>
                                    </optgroup>

                                    <optgroup label="Latin America">
                                        <option value="3">Chile</option>
                                        <option value="4">Argentina</option>
                                        <option value="5">Colombia</option>
                                        <option value="6">Peru</option>
                                    </optgroup>

                                    <optgroup label="Europe">
                                        <option value="8">Croatia</option>
                                        <option value="9">Hungary</option>
                                        <option value="10">Ukraine</option>
                                        <option value="11">Greece</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select position:</label>
                                <select name="position" data-placeholder="Select position" class="form-control form-control-select2" data-fouc>
                                    <option></option>
                                    <optgroup label="Developer Relations">
                                        <option value="1">Sales Engineer</option>
                                        <option value="2">Ads Solutions Consultant</option>
                                        <option value="3">Technical Solutions Consultant</option>
                                        <option value="4">Business Intern</option>
                                    </optgroup>

                                    <optgroup label="Engineering &amp; Design">
                                        <option value="5">Interaction Designer</option>
                                        <option value="6">Technical Program Manager</option>
                                        <option value="7">Software Engineer</option>
                                        <option value="8">Information Security Engineer</option>
                                    </optgroup>

                                    <optgroup label="Marketing &amp; Communications">
                                        <option value="13">Media Outreach Manager</option>
                                        <option value="14">Research Manager</option>
                                        <option value="15">Marketing Intern</option>
                                        <option value="16">Business Intern</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Applicant name:</label>
                                <input type="text" name="name" class="form-control" placeholder="John Doe">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email address:</label>
                                <input type="email" name="email" class="form-control" placeholder="your@email.com">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone #:</label>
                                <input type="text" name="tel" class="form-control" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label>Date of birth:</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="birth-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                            <option></option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="birth-day" data-placeholder="Day" class="form-control form-control-select2" data-fouc>
                                            <option></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="...">...</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="birth-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                            <option></option>
                                            <option value="1">1980</option>
                                            <option value="2">1981</option>
                                            <option value="3">1982</option>
                                            <option value="4">1983</option>
                                            <option value="5">1984</option>
                                            <option value="6">1985</option>
                                            <option value="7">1986</option>
                                            <option value="8">1987</option>
                                            <option value="9">1988</option>
                                            <option value="10">1989</option>
                                            <option value="11">1990</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <h6>Your education</h6>
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>University:</label>
                                <input type="text" name="university" placeholder="University name" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Country:</label>
                                <select name="university-country" data-placeholder="Choose a Country..." class="form-control form-control-select2" data-fouc>
                                    <option></option> 
                                    <option value="1">United States</option> 
                                    <option value="2">France</option> 
                                    <option value="3">Germany</option> 
                                    <option value="4">Spain</option> 
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Degree level:</label>
                                <input type="text" name="degree-level" placeholder="Bachelor, Master etc." class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Specialization:</label>
                                <input type="text" name="specialization" placeholder="Design, Development etc." class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>From:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                    <option></option>
                                                    <option value="January">January</option> 
                                                    <option value="...">...</option> 
                                                    <option value="December">December</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                    <option></option> 
                                                    <option value="1995">1995</option> 
                                                    <option value="...">...</option> 
                                                    <option value="1980">1980</option> 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label>To:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                    <option></option>
                                                    <option value="January">January</option> 
                                                    <option value="...">...</option> 
                                                    <option value="December">December</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                    <option></option> 
                                                    <option value="1995">1995</option> 
                                                    <option value="...">...</option> 
                                                    <option value="1980">1980</option> 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Language of education:</label>
                                <input type="text" name="education-language" placeholder="English, German etc." class="form-control">
                            </div>
                        </div>
                    </div>
                </fieldset>

                <h6>Your experience</h6>
                <fieldset data-step-start>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company:</label>
                                <input type="text" name="experience-company" placeholder="Company name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Position:</label>
                                <input type="text" name="experience-position" placeholder="Company name" class="form-control">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>From:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                    <option></option>
                                                    <option value="January">January</option> 
                                                    <option value="...">...</option> 
                                                    <option value="December">December</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                    <option></option> 
                                                    <option value="1995">1995</option> 
                                                    <option value="...">...</option> 
                                                    <option value="1980">1980</option> 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label>To:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                    <option></option>
                                                    <option value="January">January</option> 
                                                    <option value="...">...</option> 
                                                    <option value="December">December</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                    <option></option> 
                                                    <option value="1995">1995</option> 
                                                    <option value="...">...</option> 
                                                    <option value="1980">1980</option> 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Brief description:</label>
                                <textarea name="experience-description" rows="4" cols="4" placeholder="Tasks and responsibilities" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <label class="d-block">Recommendations:</label>
                                <input name="recommendations" type="file" class="form-input-styled" data-fouc>
                                <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <h6>Additional info</h6>
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="d-block">Applicant resume:</label>
                                <input type="file" name="resume" class="form-input-styled" data-fouc>
                                <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Where did you find us?</label>
                                <select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc>
                                    <option></option> 
                                    <option value="monster">Monster.com</option> 
                                    <option value="linkedin">LinkedIn</option> 
                                    <option value="google">Google</option> 
                                    <option value="adwords">Google AdWords</option> 
                                    <option value="other">Other source</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Availability:</label>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                        Immediately
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                        1 - 2 weeks
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                        3 - 4 weeks
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                        More than 1 month
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Additional information:</label>
                                <textarea name="additional-info" rows="5" cols="5" placeholder="If you want to add any info, do it here." class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <!-- /starting step -->


        <!-- Starting step -->
        <div class="card">
            <div class="card-header bg-white header-elements-inline">
                <h6 class="card-title">Enable all steps <span class="text-muted font-size-base ml-2">and make them clickable</span></h6>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <form class="wizard-form steps-enable-all" action="#" data-fouc>
                <h6>Personal data</h6>
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select location:</label>
                                <select name="location" data-placeholder="Select position" class="form-control form-control-select2" data-fouc>
                                    <option></option>
                                    <optgroup label="North America">
                                        <option value="1">United States</option>
                                        <option value="2">Canada</option>
                                    </optgroup>

                                    <optgroup label="Latin America">
                                        <option value="3">Chile</option>
                                        <option value="4">Argentina</option>
                                        <option value="5">Colombia</option>
                                        <option value="6">Peru</option>
                                    </optgroup>

                                    <optgroup label="Europe">
                                        <option value="8">Croatia</option>
                                        <option value="9">Hungary</option>
                                        <option value="10">Ukraine</option>
                                        <option value="11">Greece</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select position:</label>
                                <select name="position" data-placeholder="Select position" class="form-control form-control-select2" data-fouc>
                                    <option></option>
                                    <optgroup label="Developer Relations">
                                        <option value="1">Sales Engineer</option>
                                        <option value="2">Ads Solutions Consultant</option>
                                        <option value="3">Technical Solutions Consultant</option>
                                        <option value="4">Business Intern</option>
                                    </optgroup>

                                    <optgroup label="Engineering &amp; Design">
                                        <option value="5">Interaction Designer</option>
                                        <option value="6">Technical Program Manager</option>
                                        <option value="7">Software Engineer</option>
                                        <option value="8">Information Security Engineer</option>
                                    </optgroup>

                                    <optgroup label="Marketing &amp; Communications">
                                        <option value="13">Media Outreach Manager</option>
                                        <option value="14">Research Manager</option>
                                        <option value="15">Marketing Intern</option>
                                        <option value="16">Business Intern</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Applicant name:</label>
                                <input type="text" name="name" class="form-control" placeholder="John Doe">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email address:</label>
                                <input type="email" name="email" class="form-control" placeholder="your@email.com">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone #:</label>
                                <input type="text" name="tel" class="form-control" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label>Date of birth:</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="birth-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                            <option></option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="birth-day" data-placeholder="Day" class="form-control form-control-select2" data-fouc>
                                            <option></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="...">...</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="birth-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                            <option></option>
                                            <option value="1">1980</option>
                                            <option value="2">1981</option>
                                            <option value="3">1982</option>
                                            <option value="4">1983</option>
                                            <option value="5">1984</option>
                                            <option value="6">1985</option>
                                            <option value="7">1986</option>
                                            <option value="8">1987</option>
                                            <option value="9">1988</option>
                                            <option value="10">1989</option>
                                            <option value="11">1990</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <h6>Your education</h6>
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>University:</label>
                                <input type="text" name="university" placeholder="University name" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Country:</label>
                                <select name="university-country" data-placeholder="Choose a Country..." class="form-control form-control-select2" data-fouc>
                                    <option></option> 
                                    <option value="1">United States</option> 
                                    <option value="2">France</option> 
                                    <option value="3">Germany</option> 
                                    <option value="4">Spain</option> 
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Degree level:</label>
                                <input type="text" name="degree-level" placeholder="Bachelor, Master etc." class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Specialization:</label>
                                <input type="text" name="specialization" placeholder="Design, Development etc." class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>From:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                    <option></option>
                                                    <option value="January">January</option> 
                                                    <option value="...">...</option> 
                                                    <option value="December">December</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                    <option></option> 
                                                    <option value="1995">1995</option> 
                                                    <option value="...">...</option> 
                                                    <option value="1980">1980</option> 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label>To:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                    <option></option>
                                                    <option value="January">January</option> 
                                                    <option value="...">...</option> 
                                                    <option value="December">December</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                    <option></option> 
                                                    <option value="1995">1995</option> 
                                                    <option value="...">...</option> 
                                                    <option value="1980">1980</option> 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Language of education:</label>
                                <input type="text" name="education-language" placeholder="English, German etc." class="form-control">
                            </div>
                        </div>
                    </div>
                </fieldset>

                <h6>Your experience</h6>
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company:</label>
                                <input type="text" name="experience-company" placeholder="Company name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Position:</label>
                                <input type="text" name="experience-position" placeholder="Company name" class="form-control">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>From:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                    <option></option>
                                                    <option value="January">January</option> 
                                                    <option value="...">...</option> 
                                                    <option value="December">December</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                    <option></option> 
                                                    <option value="1995">1995</option> 
                                                    <option value="...">...</option> 
                                                    <option value="1980">1980</option> 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label>To:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                    <option></option>
                                                    <option value="January">January</option> 
                                                    <option value="...">...</option> 
                                                    <option value="December">December</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                    <option></option> 
                                                    <option value="1995">1995</option> 
                                                    <option value="...">...</option> 
                                                    <option value="1980">1980</option> 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Brief description:</label>
                                <textarea name="experience-description" rows="4" cols="4" placeholder="Tasks and responsibilities" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <label class="d-block">Recommendations:</label>
                                <input name="recommendations" type="file" class="form-input-styled" data-fouc>
                                <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <h6>Additional info</h6>
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="d-block">Applicant resume:</label>
                                <input type="file" name="resume" class="form-input-styled" data-fouc>
                                <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Where did you find us?</label>
                                <select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc>
                                    <option></option> 
                                    <option value="monster">Monster.com</option> 
                                    <option value="linkedin">LinkedIn</option> 
                                    <option value="google">Google</option> 
                                    <option value="adwords">Google AdWords</option> 
                                    <option value="other">Other source</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Availability:</label>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                        Immediately
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                        1 - 2 weeks
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                        3 - 4 weeks
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                        More than 1 month
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Additional information:</label>
                                <textarea name="additional-info" rows="5" cols="5" placeholder="If you want to add any info, do it here." class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <!-- /starting step -->


        <!-- Remote content source -->
        <div class="card">
            <div class="card-header bg-white header-elements-inline">
                <h6 class="card-title">Remote content source</h6>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <form class="wizard-form steps-async" action="#" data-fouc>
                <h6>Personal data</h6>
                <fieldset data-mode="async" data-url="../../../../global_assets/demo_data/wizard/personal_data.html"></fieldset>

                <h6>Your education</h6>
                <fieldset data-mode="async" data-url="../../../../global_assets/demo_data/wizard/education.html"></fieldset>

                <h6>Your experience</h6>
                <fieldset data-mode="async" data-url="../../../../global_assets/demo_data/wizard/experience.html"></fieldset>

                <h6>Additional info</h6>
                <fieldset data-mode="async" data-url="../../../../global_assets/demo_data/wizard/additional.html"></fieldset>
            </form>
        </div>
        <!-- /remote content source -->

    </div>
    <!-- FIM form_wizard -->










    <!-- INICIO form_actions -->
    <div class="content">

        <!-- Form action components -->
        <div class="mb-3">
            <h6 class="mb-0 font-weight-semibold">
                Form action components
            </h6>
            <span class="text-muted d-block">Form actions with mixed elements</span>
        </div>

        <div class="row">
            <div class="col-md-4">

                <!-- Left aligned buttons -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Left aligned buttons</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="form-group">
                                <label>Your name:</label>
                                <input type="text" class="form-control" placeholder="Eugene Kopyov">
                            </div>

                            <div class="form-group">
                                <label>Your password:</label>
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>

                            <div class="form-group">
                                <label>Your message:</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>

                            <div class="d-flex justify-content-start align-items-center">
                                <button type="submit" class="btn btn-light">Cancel</button>
                                <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /left aligned buttons -->


                <!-- Text + button -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Text + button</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="form-group">
                                <label>Your name:</label>
                                <input type="text" class="form-control" placeholder="Eugene Kopyov">
                            </div>

                            <div class="form-group">
                                <label>Your password:</label>
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>

                            <div class="form-group">
                                <label>Your message:</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-muted"><i class="icon-code"></i> &nbsp; Some HTML is supported</span>
                                <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /text + button -->


                <!-- Inline list + button -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Inline list + button</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="form-group">
                                <label>Your name:</label>
                                <input type="text" class="form-control" placeholder="Eugene Kopyov">
                            </div>

                            <div class="form-group">
                                <label>Your password:</label>
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>

                            <div class="form-group">
                                <label>Your message:</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="list-inline mb-0">
                                    <a href="#" class="list-inline-item text-default">Support</a>
                                    <a href="#" class="list-inline-item text-default">Terms</a>
                                    <a href="#" class="list-inline-item text-default">Policy</a>
                                </div>

                                <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /inline list + button -->


                <!-- Checkbox + button -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Checkbox + button</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="form-group">
                                <label>Your name:</label>
                                <input type="text" class="form-control" placeholder="Eugene Kopyov">
                            </div>

                            <div class="form-group">
                                <label>Your password:</label>
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>

                            <div class="form-group">
                                <label>Your message:</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-control-styled" checked data-fouc>
                                        Save as template
                                    </label>
                                </div>

                                <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /checkbox + button -->

            </div>

            <div class="col-md-4">

                <!-- Right aligned buttons -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Right aligned buttons</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="form-group">
                                <label>Your name:</label>
                                <input type="text" class="form-control" placeholder="Eugene Kopyov">
                            </div>

                            <div class="form-group">
                                <label>Your password:</label>
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>

                            <div class="form-group">
                                <label>Your message:</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>

                            <div class="d-flex justify-content-end align-items-center">
                                <button type="submit" class="btn btn-light">Preview</button>
                                <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /right aligned buttons -->


                <!-- Text link + button -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Text link + button</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="form-group">
                                <label>Your name:</label>
                                <input type="text" class="form-control" placeholder="Eugene Kopyov">
                            </div>

                            <div class="form-group">
                                <label>Your password:</label>
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>

                            <div class="form-group">
                                <label>Your message:</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#">Can't send message?</a>
                                <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /text link + button -->


                <!-- Icon list + button -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Icon list + button</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="form-group">
                                <label>Your name:</label>
                                <input type="text" class="form-control" placeholder="Eugene Kopyov">
                            </div>

                            <div class="form-group">
                                <label>Your password:</label>
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>

                            <div class="form-group">
                                <label>Your message:</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="list-icons">
                                    <a href="#" class="list-icons-item mr-2"><i class="icon-github"></i></a>
                                    <a href="#" class="list-icons-item mr-2"><i class="icon-stackoverflow"></i></a>
                                    <a href="#" class="list-icons-item mr-2"><i class="icon-google-drive"></i></a>
                                </div>

                                <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /icon list + button -->


                <!-- Switch + button -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Switch + button</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="form-group">
                                <label>Your name:</label>
                                <input type="text" class="form-control" placeholder="Eugene Kopyov">
                            </div>

                            <div class="form-group">
                                <label>Your password:</label>
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>

                            <div class="form-group">
                                <label>Your message:</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-check form-check-switchery mb-0">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-control-switchery" checked data-fouc>
                                        Start discussion
                                    </label>
                                </div>

                                <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /switch + button -->

            </div>

            <div class="col-md-4">

                <!-- Left and right buttons -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Left/right buttons</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="form-group">
                                <label>Your name:</label>
                                <input type="text" class="form-control" placeholder="Eugene Kopyov">
                            </div>

                            <div class="form-group">
                                <label>Your password:</label>
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>

                            <div class="form-group">
                                <label>Your message:</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <button type="submit" class="btn btn-light">Cancel</button>
                                <button type="submit" class="btn bg-blue">Submit <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /left and right buttons -->


                <!-- Status text + button -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Status text + button</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="form-group">
                                <label>Your name:</label>
                                <input type="text" class="form-control" placeholder="Eugene Kopyov">
                            </div>

                            <div class="form-group">
                                <label>Your password:</label>
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>

                            <div class="form-group">
                                <label>Your message:</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <span><i class="icon-spinner2 spinner mr-2"></i> Processing...</span>
                                <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /status text + button -->


                <!-- Left alternate button -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Left alternate button</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="form-group">
                                <label>Your name:</label>
                                <input type="text" class="form-control" placeholder="Eugene Kopyov">
                            </div>

                            <div class="form-group">
                                <label>Your password:</label>
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>

                            <div class="form-group">
                                <label>Your message:</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#" class="btn btn-light btn-icon"><i class="icon-help"></i></a>
                                <div class="d-inline-flex">
                                    <button type="reset" class="btn btn-light">Cancel</button>
                                    <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /left alternate button -->


                <!-- Select + button -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Select + button</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="form-group">
                                <label>Your name:</label>
                                <input type="text" class="form-control" placeholder="Eugene Kopyov">
                            </div>

                            <div class="form-group">
                                <label>Your password:</label>
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>

                            <div class="form-group">
                                <label>Your message:</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>

                            <div class="d-lg-flex justify-content-between align-items-center flex-wrap">
                                <div class="wmin-lg-200 mb-3 mb-lg-0">
                                    <select class="form-control form-control-select2" data-placeholder="Actions" data-fouc>
                                        <option></option>
                                        <option value="1">Send to all contacts</option>
                                        <option value="2">Send to my contacts</option>
                                        <option value="3">Save as draft</option>
                                        <option value="4">Don't have in Sent</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn bg-blue ml-lg-3">Submit <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /select + button -->

            </div>
        </div>
        <!-- /form action components -->


        <!-- Form actions positioning -->
        <div class="mb-3 pt-2">
            <h6 class="mb-0 font-weight-semibold">
                Form actions alignment
            </h6>
            <span class="text-muted d-block">Using text or flexbox utility classes</span>
        </div>

        <div class="row">
            <div class="col-md-4">

                <!-- Left alignment -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Left aligned</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="form-group">
                                <label>Your name:</label>
                                <input type="text" class="form-control" placeholder="Eugene Kopyov">
                            </div>

                            <div class="form-group">
                                <label>Your password:</label>
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>

                            <div class="form-group">
                                <label>Your message:</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>

                            <button type="submit" class="btn bg-teal-400">Submit form <i class="icon-paperplane ml-2"></i></button>
                        </form>
                    </div>
                </div>
                <!-- /left alignment -->

            </div>

            <div class="col-md-4">

                <!-- Centered buttons -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Centered actions</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="form-group">
                                <label>Your name:</label>
                                <input type="text" class="form-control" placeholder="Eugene Kopyov">
                            </div>

                            <div class="form-group">
                                <label>Your password:</label>
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>

                            <div class="form-group">
                                <label>Your message:</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn bg-teal-400">Submit form <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /centered buttons -->

            </div>

            <div class="col-md-4">

                <!-- Right alignment -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Right aligned</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="form-group">
                                <label>Your name: </label>
                                <input type="text" class="form-control" placeholder="Eugene Kopyov">
                            </div>

                            <div class="form-group">
                                <label>Your password: </label>
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>

                            <div class="form-group">
                                <label>Your message: </label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn bg-teal-400">Submit form <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /right alignment -->

            </div>
        </div>
        <!-- /form actions positioning -->


        <!-- Optional styles -->
        <div class="mb-3 pt-2">
            <h6 class="mb-0 font-weight-semibold">
                Optional styles
            </h6>
            <span class="text-muted d-block">White, grey and custom backgrounds</span>
        </div>

        <div class="row">
            <div class="col-md-4">

                <!-- Grey background -->
                <form action="#">
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h6 class="card-title">Grey background</h6>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                    <a class="list-icons-item" data-action="reload"></a>
                                    <a class="list-icons-item" data-action="remove"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label>Your name:</label>
                                <input type="text" class="form-control" placeholder="Eugene Kopyov">
                            </div>

                            <div class="form-group">
                                <label>Your password:</label>
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>

                            <div class="form-group mb-0">
                                <label>Your message:</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <button type="submit" class="btn btn-light">Cancel</button>
                            <button type="submit" class="btn bg-blue">Submit form <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </div>
                </form>
                <!-- /grey background -->

            </div>

            <div class="col-md-4">

                <!-- White background -->
                <form action="#">
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h6 class="card-title">White background</h6>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                    <a class="list-icons-item" data-action="reload"></a>
                                    <a class="list-icons-item" data-action="remove"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label>Your name:</label>
                                <input type="text" class="form-control" placeholder="Eugene Kopyov">
                            </div>

                            <div class="form-group">
                                <label>Your password:</label>
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>

                            <div class="form-group mb-0">
                                <label>Your message:</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center bg-white">
                            <button type="submit" class="btn btn-light">Cancel</button>
                            <button type="submit" class="btn bg-blue">Submit form <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </div>
                </form>
                <!-- /white background -->

            </div>

            <div class="col-md-4">

                <!-- Custom background -->
                <form action="#">
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h6 class="card-title">Custom background</h6>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                    <a class="list-icons-item" data-action="reload"></a>
                                    <a class="list-icons-item" data-action="remove"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label>Your name:</label>
                                <input type="text" class="form-control" placeholder="Eugene Kopyov">
                            </div>

                            <div class="form-group">
                                <label>Your password:</label>
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>

                            <div class="form-group mb-0">
                                <label>Your message:</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center bg-teal-400 border-top-0">
                            <button type="submit" class="btn bg-transparent text-white border-white border-2">Cancel</button>
                            <button type="submit" class="btn btn-outline bg-white text-white border-white border-2">Submit form <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </div>
                </form>
                <!-- /custom background -->

            </div>
        </div>
        <!-- /optional styles -->


        <!-- In horizontal forms -->
        <div class="mb-3 pt-2">
            <h6 class="mb-0 font-weight-semibold">
                In horizontal forms
            </h6>
            <span class="text-muted d-block">Styling and alignment options</span>
        </div>

        <div class="row">
            <div class="col-md-6">

                <!-- Left buttons -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Left buttons</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Your name:</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Your password:</label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control" placeholder="Your strong password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Your message:</label>
                                <div class="col-lg-10">
                                    <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-lg-10 ml-lg-auto">
                                    <button type="submit" class="btn btn-light">Cancel</button>
                                    <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /left buttons -->


                <!-- Left and right buttons -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Left and right buttons</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Your name:</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Your password:</label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control" placeholder="Your strong password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Your message:</label>
                                <div class="col-lg-10">
                                    <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-lg-10 ml-lg-auto">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button type="submit" class="btn btn-light">Cancel</button>
                                        <button type="submit" class="btn bg-blue">Submit <i class="icon-paperplane ml-2"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /left and right buttons -->

            </div>

            <div class="col-md-6">

                <!-- Right buttons -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Right buttons</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Your name:</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Your password:</label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control" placeholder="Your strong password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Your message:</label>
                                <div class="col-lg-10">
                                    <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-lg-10 ml-lg-auto text-right">
                                    <button type="submit" class="btn btn-light">Cancel</button>
                                    <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /right buttons -->


                <!-- Left and right buttons (reversed) -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Left and right buttons (reversed)</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Your name:</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Your password:</label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control" placeholder="Your strong password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Your message:</label>
                                <div class="col-lg-10">
                                    <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-lg-10 ml-lg-auto">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button type="submit" class="btn bg-blue">Submit <i class="icon-paperplane ml-2"></i></button>
                                        <button type="submit" class="btn btn-light">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /left and right buttons (reversed) -->

            </div>
        </div>
        <!-- /in horizontal forms -->


        <!-- Optional button styles -->
        <div class="mb-3 pt-2">
            <h6 class="mb-0 font-weight-semibold">
                Optional button styles
            </h6>
            <span class="text-muted d-block">Action buttons placement and spacing</span>
        </div>

        <div class="row">
            <div class="col-md-6">

                <!-- Grey background, left button spacing -->
                <form action="#">
                    <div class="card">
                        <div class="card-header bg-white header-elements-inline">
                            <h6 class="card-title">Grey bg and left spacing</h6>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                    <a class="list-icons-item" data-action="reload"></a>
                                    <a class="list-icons-item" data-action="remove"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-10 ml-lg-auto">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button type="submit" class="btn btn-light">Cancel</button>
                                        <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Your name:</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Your password:</label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control" placeholder="Your strong password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <label class="col-form-label col-lg-2">Your message:</label>
                                <div class="col-lg-10">
                                    <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-10 ml-lg-auto">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button type="submit" class="btn btn-light">Cancel</button>
                                        <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /grey background, left button spacing -->


                <!-- Grey background, no left button spacing -->
                <form action="#">
                    <div class="card">
                        <div class="card-header bg-white header-elements-inline">
                            <h6 class="card-title">Grey background</h6>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                    <a class="list-icons-item" data-action="reload"></a>
                                    <a class="list-icons-item" data-action="remove"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="submit" class="btn btn-light">Cancel</button>
                                <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Your name:</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Your password:</label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control" placeholder="Your strong password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <label class="col-form-label col-lg-2">Your message:</label>
                                <div class="col-lg-10">
                                    <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="submit" class="btn btn-light">Cancel</button>
                                <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /grey background, no left button spacing -->

            </div>

            <div class="col-md-6">

                <!-- White background, left button spacing -->
                <form action="#">
                    <div class="card">
                        <div class="card-header bg-white header-elements-inline">
                            <h6 class="card-title">White bg and left spacing</h6>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                    <a class="list-icons-item" data-action="reload"></a>
                                    <a class="list-icons-item" data-action="remove"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer bg-white">
                            <div class="row">
                                <div class="col-lg-10 ml-lg-auto">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button type="submit" class="btn btn-light">Cancel</button>
                                        <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Your name:</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Your password:</label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control" placeholder="Your strong password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <label class="col-form-label col-lg-2">Your message:</label>
                                <div class="col-lg-10">
                                    <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer bg-white">
                            <div class="row">
                                <div class="col-lg-10 ml-lg-auto">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button type="submit" class="btn btn-light">Cancel</button>
                                        <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /white background, left button spacing -->


                <!-- White background, no left button spacing -->
                <form action="#">
                    <div class="card">
                        <div class="card-header bg-white header-elements-inline">
                            <h6 class="card-title">White background</h6>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                    <a class="list-icons-item" data-action="reload"></a>
                                    <a class="list-icons-item" data-action="remove"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer bg-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="submit" class="btn btn-light">Cancel</button>
                                <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Your name:</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Your password:</label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control" placeholder="Your strong password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <label class="col-form-label col-lg-2">Your message:</label>
                                <div class="col-lg-10">
                                    <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer bg-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="submit" class="btn btn-light">Cancel</button>
                                <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /white background, no left button spacing -->

            </div>
        </div>
        <!-- /optional button styles -->

    </div>
    <!-- FIM form_actions -->











    <!-- INICIO form_inputs_grid -->
    <div class="content">

        <!-- Default grid -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Default form</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="col-md-2">
                                    </div>
                                </div>

                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="col-md-10">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="col-md-3">
                                    </div>
                                </div>

                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="col-md-9">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="col-md-4">
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="col-md-8">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="col-md-5">
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="col-md-7">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="col-md-6">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="col-md-6">
                                    </div>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Horizontal form</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <input type="text" class="form-control" placeholder="col-md-2">
                                </div>

                                <div class="col-md-10">
                                    <input type="text" class="form-control" placeholder="col-md-10">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-3">
                                    <input type="text" class="form-control" placeholder="col-md-3">
                                </div>

                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="col-md-9">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="col-md-4">
                                </div>

                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="col-md-8">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-5">
                                    <input type="text" class="form-control" placeholder="col-md-5">
                                </div>

                                <div class="col-md-7">
                                    <input type="text" class="form-control" placeholder="col-md-7">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="col-md-6">
                                </div>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="col-md-6">
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /default grid -->


        <!-- Alignment -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Right inputs</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder=".col-md-12".>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-11 ml-md-auto">
                                    <input type="text" class="form-control" placeholder=".col-md-11 .ml-md-auto">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-10 ml-md-auto">
                                    <input type="text" class="form-control" placeholder=".col-md-10 .ml-md-auto">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-9 ml-md-auto">
                                    <input type="text" class="form-control" placeholder=".col-md-9 .ml-md-auto">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8 ml-md-auto">
                                    <input type="text" class="form-control" placeholder=".col-md-8 .ml-md-auto">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-7 ml-md-auto">
                                    <input type="text" class="form-control" placeholder=".col-md-7 .ml-md-auto">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 ml-md-auto">
                                    <input type="text" class="form-control" placeholder=".col-md-6 .ml-md-auto">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-5 ml-md-auto">
                                    <input type="text" class="form-control" placeholder=".col-md-5 .ml-md-auto">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4 ml-md-auto">
                                    <input type="text" class="form-control" placeholder=".col-md-4 .ml-md-auto">
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Left inputs</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="col-md-12">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-11">
                                    <input type="text" class="form-control" placeholder="col-md-11">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-10">
                                    <input type="text" class="form-control" placeholder="col-md-10">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="col-md-9">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="col-md-8">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-7">
                                    <input type="text" class="form-control" placeholder="col-md-7">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="col-md-6">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-5">
                                    <input type="text" class="form-control" placeholder="col-md-5">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="col-md-4">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /alignment -->


        <!-- Centered inputs -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Centered horizontal inputs</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 text-lg-right">Label</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" placeholder="Full width">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-10 mx-lg-auto">
                                    <div class="row">
                                        <label class="col-form-label col-lg-3 text-lg-right">Label</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="col-lg-10 mx-lg-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-8 mx-lg-auto">
                                    <div class="row">
                                        <label class="col-form-label col-lg-3 text-lg-right">Label</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="col-lg-8 mx-lg-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-6 mx-lg-auto">
                                    <div class="row">
                                        <label class="col-form-label col-lg-3 text-lg-right">Label</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="col-lg-6 mx-lg-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-4 mx-lg-auto">
                                    <div class="row">
                                        <label class="col-form-label col-lg-4 text-lg-right">Label</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" placeholder="col-lg-4 mx-lg-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Centered vertical inputs</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-10 mx-lg-auto">
                                    <div class="form-group">
                                        <label>Row label</label>
                                        <input type="text" class="form-control" placeholder="col-lg-10 mx-lg-auto">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-8 mx-lg-auto">
                                    <div class="form-group">
                                        <label>Row label</label>
                                        <input type="text" class="form-control" placeholder="col-lg-8 mx-lg-auto">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 mx-lg-auto">
                                    <div class="form-group">
                                        <label>Row label</label>
                                        <input type="text" class="form-control" placeholder="col-lg-6 mx-lg-auto">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 mx-lg-auto">
                                    <div class="form-group">
                                        <label>Row label</label>
                                        <input type="text" class="form-control" placeholder="col-lg-4 mx-lg-auto">
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /centered inputs -->


        <!-- Row and input labels (default form) -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Vertical row label</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <label>Label</label>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="col-md-2">
                                    </div>
                                </div>

                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="col-md-10">
                                    </div>
                                </div>
                            </div>

                            <label>Label</label>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="col-md-3">
                                    </div>
                                </div>

                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="col-md-9">
                                    </div>
                                </div>
                            </div>

                            <label>Label</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="col-md-4">
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="col-md-8">
                                    </div>
                                </div>
                            </div>

                            <label>Label</label>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="col-md-5">
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="col-md-7">
                                    </div>
                                </div>
                            </div>

                            <label>Label</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="col-md-6">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="col-md-6">
                                    </div>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Vertical input label</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Label</label>
                                        <input type="text" class="form-control" placeholder="col-md-2">
                                    </div>
                                </div>

                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label>Label</label>
                                        <input type="text" class="form-control" placeholder="col-md-10">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Label</label>
                                        <input type="text" class="form-control" placeholder="col-md-3">
                                    </div>
                                </div>

                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label>Label</label>
                                        <input type="text" class="form-control" placeholder="col-md-9">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Label</label>
                                        <input type="text" class="form-control" placeholder="col-md-4">
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Label</label>
                                        <input type="text" class="form-control" placeholder="col-md-8">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Label</label>
                                        <input type="text" class="form-control" placeholder="col-md-5">
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label>Label</label>
                                        <input type="text" class="form-control" placeholder="col-md-7">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Label</label>
                                        <input type="text" class="form-control" placeholder="col-md-6">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Label</label>
                                        <input type="text" class="form-control" placeholder="col-md-6">
                                    </div>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row and input labels (default form) -->


        <!-- Row label (horizontal form) -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h6 class="card-title">Horizontal row labels</h6>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="#">
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Label</label>
                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col-md-1">
                                    <input type="text" class="form-control" placeholder="col-md-1">
                                </div>

                                <div class="col-md-11">
                                    <input type="text" class="form-control" placeholder="col-md-11">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Label</label>
                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col-md-2">
                                    <input type="text" class="form-control" placeholder="col-md-2">
                                </div>

                                <div class="col-md-10">
                                    <input type="text" class="form-control" placeholder="col-md-10">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Label</label>
                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="text" class="form-control" placeholder="col-md-3">
                                </div>

                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="col-md-9">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Label</label>
                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="col-md-4">
                                </div>

                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="col-md-8">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Label</label>
                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="text" class="form-control" placeholder="col-md-5">
                                </div>

                                <div class="col-md-7">
                                    <input type="text" class="form-control" placeholder="col-md-7">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Label</label>
                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="col-md-6">
                                </div>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="col-md-6">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /row label (horizontal form) -->


        <!-- Input label (horizontal form) -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h6 class="card-title">Horizontal input labels</h6>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="#">
                    <div class="form-group row">
                        <div class="col-lg-2">
                            <div class="row">
                                <label class="col-md-4 col-form-label text-lg-right">Label: </label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="col-md-2">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-10">
                            <div class="row">
                                <label class="col-md-4 col-form-label text-lg-right">Label: </label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="col-md-10">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-3">
                            <div class="row">
                                <label class="col-md-4 col-form-label text-lg-right">Label: </label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="col-md-3">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            <div class="row">
                                <label class="col-md-4 col-form-label text-lg-right">Label: </label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="col-md-9">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-4">
                            <div class="row">
                                <label class="col-md-4 col-form-label text-lg-right">Label: </label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="col-md-4">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="row">
                                <label class="col-md-4 col-form-label text-lg-right">Label: </label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="col-md-8">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-5">
                            <div class="row">
                                <label class="col-md-4 col-form-label text-lg-right">Label: </label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="col-md-5">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <div class="row">
                                <label class="col-md-4 col-form-label text-lg-right">Label: </label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="col-md-7">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-6">
                            <div class="row">
                                <label class="col-md-4 col-form-label text-lg-right">Label: </label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="col-md-6">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="row">
                                <label class="col-md-4 col-form-label text-lg-right">Label: </label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="col-md-6">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /input label (horizontal form) -->


        <!-- Multiple row inputs (vertical) -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h6 class="card-title">Multiple vertical inputs</h6>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="#">
                    <label>First form group</label>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First row, first input">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Second row, first input">
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First row, second input">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Second row, second input">
                            </div>
                        </div>
                    </div>

                    <label>Second form group</label>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First row, first input">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Second row, first input">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First row, second input">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Second row, second input">
                            </div>
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /multiple row inputs (vertical) -->


        <!-- Multiple row inputs (horizontal) -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h6 class="card-title">Multiple horizontal inputs</h6>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="#">
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">First form group</label>
                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First row, first input">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Second row, first input">
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First row, second input">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Second row, second input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">First form group</label>
                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First row, first input">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Second row, first input">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First row, second input">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Second row, second input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /multiple row inputs (horizontal) -->

    </div>
    <!-- FIM form_inputs_grid -->




</div>
<!-- /main content -->