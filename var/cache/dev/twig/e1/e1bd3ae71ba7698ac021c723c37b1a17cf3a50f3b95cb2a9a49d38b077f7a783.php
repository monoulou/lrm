<?php

/* MAUserBundle:Security:login_content.html.twig */
class __TwigTemplate_633b2460e91b8a46f38e7ed37cf0d28b93b34e0363e2be61ab6f0786ebfb8c0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_977f212d4fdbd405f883f0a922513611135efe36728890bf13a22c2206335ba4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_977f212d4fdbd405f883f0a922513611135efe36728890bf13a22c2206335ba4->enter($__internal_977f212d4fdbd405f883f0a922513611135efe36728890bf13a22c2206335ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Security:login_content.html.twig"));

        $__internal_6c4f7ab69b5ce038c33c11d63471988cc2dd45e3e82e44c666a6d4bc4ca07479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c4f7ab69b5ce038c33c11d63471988cc2dd45e3e82e44c666a6d4bc4ca07479->enter($__internal_6c4f7ab69b5ce038c33c11d63471988cc2dd45e3e82e44c666a6d4bc4ca07479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Security:login_content.html.twig"));

        // line 1
        echo "
";
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
        echo "



";
        
        $__internal_977f212d4fdbd405f883f0a922513611135efe36728890bf13a22c2206335ba4->leave($__internal_977f212d4fdbd405f883f0a922513611135efe36728890bf13a22c2206335ba4_prof);

        
        $__internal_6c4f7ab69b5ce038c33c11d63471988cc2dd45e3e82e44c666a6d4bc4ca07479->leave($__internal_6c4f7ab69b5ce038c33c11d63471988cc2dd45e3e82e44c666a6d4bc4ca07479_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_487d98d9ed8c089380cae996389193675994b1d391653147e399803e26ec14ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_487d98d9ed8c089380cae996389193675994b1d391653147e399803e26ec14ef->enter($__internal_487d98d9ed8c089380cae996389193675994b1d391653147e399803e26ec14ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_87bc12ea4f00b1331d8576d225b3b8c3d480dfe20c171c408b6e846d4c744c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87bc12ea4f00b1331d8576d225b3b8c3d480dfe20c171c408b6e846d4c744c8e->enter($__internal_87bc12ea4f00b1331d8576d225b3b8c3d480dfe20c171c408b6e846d4c744c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />

";
        
        $__internal_87bc12ea4f00b1331d8576d225b3b8c3d480dfe20c171c408b6e846d4c744c8e->leave($__internal_87bc12ea4f00b1331d8576d225b3b8c3d480dfe20c171c408b6e846d4c744c8e_prof);

        
        $__internal_487d98d9ed8c089380cae996389193675994b1d391653147e399803e26ec14ef->leave($__internal_487d98d9ed8c089380cae996389193675994b1d391653147e399803e26ec14ef_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7fdb85d685e99d4c3ff26cb676a72aaa0d0ad3c322dcff2ffd209763d0cf1822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fdb85d685e99d4c3ff26cb676a72aaa0d0ad3c322dcff2ffd209763d0cf1822->enter($__internal_7fdb85d685e99d4c3ff26cb676a72aaa0d0ad3c322dcff2ffd209763d0cf1822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_af5a0477a79b8d7ee7ceb95cf9cbe7f07071dd8ca6d1b829521366e6337b5c3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af5a0477a79b8d7ee7ceb95cf9cbe7f07071dd8ca6d1b829521366e6337b5c3b->enter($__internal_af5a0477a79b8d7ee7ceb95cf9cbe7f07071dd8ca6d1b829521366e6337b5c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "

    <div class=\"container\">

        <div class=\"row\" id=\"row_connexion\">
            ";
        // line 16
        echo "            ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 17
            echo "                <div class=\"row\">
                    <div class=\"col-lg-offset-4 col-lg-4\">
                        <div class=\"alert alert-danger\" id=\"message_error\">
                        <i class=\"icon icon-times-circle icon-lg\"></i>
                        <strong>Erreur !</strong> IDENTIFIANTS INCCORECTS
                    </div>
                    </div>
                    <!--<div class=\"alert alert-danger\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>-->
                </div>
            ";
        }
        // line 27
        echo "            <div class=\"col-lg-offset-4 col-lg-4\" id=\"form_box\">
                <form class=\"form-horizontal\" action=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"POST\">
                    <div id=\"form_field\">
                        <fieldset>
                            <legend class=\"\">Connexion</legend>
                            <div id=\"input_form\">
                                <div class=\"control-group\">
                                    <!-- Username -->
                                    <label class=\"control-label\"  for=\"username\">Utilisateur</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"input-xlarge\">
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <!-- Password-->
                                    <label class=\"control-label\" for=\"password\">Mot de passe</label>
                                    <div class=\"controls\">
                                        <input type=\"password\" id=\"password\" name=\"_password\" class=\"input-xlarge\">
                                    </div>
                                </div>
                                <br>
                                <div class=\"control-group\">
                                    <!-- Remenber me-->
                                    <label for=\"remember_me\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                </div>
                                <div><a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe oublié ?</a></div>
                                <div class=\"control-group\">
                                    <!-- Button -->
                                    <div class=\"controls\">
                                        <button type=\"submit\" value=\"Connexion\" class=\"btn btn-success\" id=\"button_connexion\">Valider</button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_af5a0477a79b8d7ee7ceb95cf9cbe7f07071dd8ca6d1b829521366e6337b5c3b->leave($__internal_af5a0477a79b8d7ee7ceb95cf9cbe7f07071dd8ca6d1b829521366e6337b5c3b_prof);

        
        $__internal_7fdb85d685e99d4c3ff26cb676a72aaa0d0ad3c322dcff2ffd209763d0cf1822->leave($__internal_7fdb85d685e99d4c3ff26cb676a72aaa0d0ad3c322dcff2ffd209763d0cf1822_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b9c21176390fce400b92ddc395d4e69f099a2aef2819930228f8a01a8bbdca5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9c21176390fce400b92ddc395d4e69f099a2aef2819930228f8a01a8bbdca5e->enter($__internal_b9c21176390fce400b92ddc395d4e69f099a2aef2819930228f8a01a8bbdca5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1697747ec5041ef4262f0273c632b9520e2a870dd326ffd5d3433fc3bef8f28c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1697747ec5041ef4262f0273c632b9520e2a870dd326ffd5d3433fc3bef8f28c->enter($__internal_1697747ec5041ef4262f0273c632b9520e2a870dd326ffd5d3433fc3bef8f28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1697747ec5041ef4262f0273c632b9520e2a870dd326ffd5d3433fc3bef8f28c->leave($__internal_1697747ec5041ef4262f0273c632b9520e2a870dd326ffd5d3433fc3bef8f28c_prof);

        
        $__internal_b9c21176390fce400b92ddc395d4e69f099a2aef2819930228f8a01a8bbdca5e->leave($__internal_b9c21176390fce400b92ddc395d4e69f099a2aef2819930228f8a01a8bbdca5e_prof);

    }

    public function getTemplateName()
    {
        return "MAUserBundle:Security:login_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  180 => 70,  154 => 53,  148 => 50,  132 => 37,  120 => 28,  117 => 27,  111 => 24,  102 => 17,  99 => 16,  92 => 10,  83 => 9,  69 => 5,  60 => 4,  46 => 72,  44 => 70,  41 => 69,  39 => 9,  36 => 8,  34 => 4,  31 => 3,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% trans_default_domain 'FOSUserBundle' %}

{% block stylesheets %}
    <link href=\"{{ asset ('css/login.css') }}\" rel='stylesheet' type='text/css' />

{% endblock %}

{% block fos_user_content %}


    <div class=\"container\">

        <div class=\"row\" id=\"row_connexion\">
            {# S'il y a une erreur, on l'affiche dans un joli cadre #}
            {% if error %}
                <div class=\"row\">
                    <div class=\"col-lg-offset-4 col-lg-4\">
                        <div class=\"alert alert-danger\" id=\"message_error\">
                        <i class=\"icon icon-times-circle icon-lg\"></i>
                        <strong>Erreur !</strong> IDENTIFIANTS INCCORECTS
                    </div>
                    </div>
                    <!--<div class=\"alert alert-danger\">{{ error.message }}</div>-->
                </div>
            {% endif %}
            <div class=\"col-lg-offset-4 col-lg-4\" id=\"form_box\">
                <form class=\"form-horizontal\" action=\"{{ path('fos_user_security_check') }}\" method=\"POST\">
                    <div id=\"form_field\">
                        <fieldset>
                            <legend class=\"\">Connexion</legend>
                            <div id=\"input_form\">
                                <div class=\"control-group\">
                                    <!-- Username -->
                                    <label class=\"control-label\"  for=\"username\">Utilisateur</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"input-xlarge\">
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <!-- Password-->
                                    <label class=\"control-label\" for=\"password\">Mot de passe</label>
                                    <div class=\"controls\">
                                        <input type=\"password\" id=\"password\" name=\"_password\" class=\"input-xlarge\">
                                    </div>
                                </div>
                                <br>
                                <div class=\"control-group\">
                                    <!-- Remenber me-->
                                    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
                                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                </div>
                                <div><a href=\"{{ path('fos_user_resetting_request') }}\">Mot de passe oublié ?</a></div>
                                <div class=\"control-group\">
                                    <!-- Button -->
                                    <div class=\"controls\">
                                        <button type=\"submit\" value=\"Connexion\" class=\"btn btn-success\" id=\"button_connexion\">Valider</button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                </form>
            </div>
        </div>
    </div>
{% endblock fos_user_content%}

{% block javascripts %}
{% endblock %}




", "MAUserBundle:Security:login_content.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle/Resources/views/Security/login_content.html.twig");
    }
}
