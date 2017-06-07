
{% extends 'index.volt' %}

{% block content %}

        <div class="user-login-5">
            <div class="row bs-reset">
                <div class="col-md-6 bs-reset mt-login-5-bsfix">
                    <div class="login-bg" style="background-image:url('{{ url('assets/img/wago_backdrop.jpg') }}')">
                    </div>
                </div>
                <div class="col-md-6 login-container bs-reset mt-login-5-bsfix">
                    <img class="login-logo login-6" src="{{ url('assets/img/logo_wago_2.png') }}" />   
                    <div class="login-content">
                        <h1>WAGO Follow-me Up</h1>                       
                        {{ form('session/login', 'class': 'login-form') }}
                            <div class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button>
                                <span>Insira seu usuario e senha. </span>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                {% if userUser != '' %}
                                {{ text_field('userUser', 'class': "form-control form-control-solid placeholder-no-fix form-group", 'value': userUser, 'autoComplete': 'off', 'required': 'required') }}
                                {% else %}
                                {{ text_field('userUser', 'class': "form-control form-control-solid placeholder-no-fix form-group", 'placeholder': 'Usuario', 'autoComplete': 'off', 'required': 'required') }}
                                {% endif %}                                    
                                </div>
                                <div class="col-xs-6">
                                    {{ password_field('userPassword', 'class': "form-control form-control-solid placeholder-no-fix form-group",'placeholder': 'Senha', 'autoComplete': 'off', 'required': 'required') }}
                                    <div class="forgot-password"> 
                                        <a href="javascript:;" id="forget-password" class="forget-password">Esqueceu sua senha?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 text-left">
                                    <label class="rememberme mt-checkbox mt-checkbox-outline">
                                        {{ check_field('remember', 'value': 'true') }} Remember me
                                        <span></span>
                                    </label>
                                </div>
                                <div class="col-xs-6 text-right">
                                    {{ submit_button('Entrar', 'class': 'btn green-wago') }}                                    
                                </div>
                            </div>
                        </form>
                        <!-- BEGIN FORGOT PASSWORD FORM -->
                        {{ form('session/reset', 'class': 'forget-form') }}                        
                            <h3>Esqueceu sua senha?</h3>
                            <p> Insira seu e-mail abaixo para redefinir sua senha. </p>
                            <div class="form-group">
                                {{ email_field('userEmail', 'class': "form-control placeholder-no-fix form-group", 'autoComplete': 'off', 'required': 'required') }}
                            </div>
                            <div class="form-actions">
                                <button type="button" id="back-btn" class="btn green-wago btn-outline">Voltar</button>
                                
                                {{ submit_button('Enviar', 'class': 'btn btn-success uppercase pull-right green-wago') }}
                            </div>
                        </form>
                        <!-- END FORGOT PASSWORD FORM -->
                        <div class="row">
                                <div class="col-xs-12 login-message">
                                <div class="loader display-hide">
                                    <span class="loader-block"></span>
                                    <span class="loader-block"></span>
                                    <span class="loader-block"></span>
                                    <span class="loader-block"></span>
                                    <span class="loader-block"></span>
                                    <span class="loader-block"></span>
                                    <span class="loader-block"></span>
                                    <span class="loader-block"></span>
                                    <span class="loader-block"></span>
                                </div>
                                    {{ flash.output() }}                                 
                                </div>                                
                        </div>
                                               
                    </div>
                    <div class="login-footer">
                        <div class="row bs-reset">
                            <div class="col-xs-5 bs-reset">
                               <ul class="login-social social-icons social-icons-color">
                                    {#
                                    <li>
                                        <a href="https://www.facebook.com/wagobr">
                                            <i class="socicon socicon-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/wagobr">
                                            <i class="socicon socicon-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UC0aKeW9IK6y0PHIiFiJHO-Q">
                                            <i class="socicon socicon-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/company/wago-brazil">
                                            <i class="socicon socicon-linkedin"></i>
                                        </a>
                                    </li>

                                    #}
                                    <li>
                                        <a href="https://www.facebook.com/wagobr" data-original-title="facebook" class="facebook"> </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/wagobr" data-original-title="twitter" class="twitter"> </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UC0aKeW9IK6y0PHIiFiJHO-Q" data-original-title="youtube" class="youtube"> </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/company/wago-brazil" data-original-title="linkedin" class="linkedin"> </a>
                                    </li>

                                    
                                </ul>
                            </div>
                            <div class="col-xs-7 bs-reset">
                                <div class="login-copyright text-right">
                                    <p>WAGO Kontakttechnik GmbH &amp; Co. KG &copy; 2016</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 {% endblock %}
