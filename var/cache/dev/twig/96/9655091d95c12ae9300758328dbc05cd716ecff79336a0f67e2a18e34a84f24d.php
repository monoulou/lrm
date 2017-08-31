<?php

/* @MAUser/Security/login_content.html.twig */
class __TwigTemplate_08353b760501fe05789dad1f165af53b2d3f925ae24c41733fbc4fb92febc7b9 extends Twig_Template
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
        $__internal_113fde297e8bdd96216bba685f91e50db9010cc3044810aa75c2fc0a109a41fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_113fde297e8bdd96216bba685f91e50db9010cc3044810aa75c2fc0a109a41fd->enter($__internal_113fde297e8bdd96216bba685f91e50db9010cc3044810aa75c2fc0a109a41fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Security/login_content.html.twig"));

        $__internal_8b2ea63de7a3b70500d4d68ad225e6d1e9ca8e45167700e80d60daf01c3f0c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b2ea63de7a3b70500d4d68ad225e6d1e9ca8e45167700e80d60daf01c3f0c6d->enter($__internal_8b2ea63de7a3b70500d4d68ad225e6d1e9ca8e45167700e80d60daf01c3f0c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Security/login_content.html.twig"));

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
        
        $__internal_113fde297e8bdd96216bba685f91e50db9010cc3044810aa75c2fc0a109a41fd->leave($__internal_113fde297e8bdd96216bba685f91e50db9010cc3044810aa75c2fc0a109a41fd_prof);

        
        $__internal_8b2ea63de7a3b70500d4d68ad225e6d1e9ca8e45167700e80d60daf01c3f0c6d->leave($__internal_8b2ea63de7a3b70500d4d68ad225e6d1e9ca8e45167700e80d60daf01c3f0c6d_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a6bc59676b484430b080374b279468cb119790fff9d9c0eaaf5a4e35ab42e3c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6bc59676b484430b080374b279468cb119790fff9d9c0eaaf5a4e35ab42e3c7->enter($__internal_a6bc59676b484430b080374b279468cb119790fff9d9c0eaaf5a4e35ab42e3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1febb3292814bd7fff0fb23cd640ac2e5d138a49b4d4fb0737ceb264cec531d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1febb3292814bd7fff0fb23cd640ac2e5d138a49b4d4fb0737ceb264cec531d7->enter($__internal_1febb3292814bd7fff0fb23cd640ac2e5d138a49b4d4fb0737ceb264cec531d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />

";
        
        $__internal_1febb3292814bd7fff0fb23cd640ac2e5d138a49b4d4fb0737ceb264cec531d7->leave($__internal_1febb3292814bd7fff0fb23cd640ac2e5d138a49b4d4fb0737ceb264cec531d7_prof);

        
        $__internal_a6bc59676b484430b080374b279468cb119790fff9d9c0eaaf5a4e35ab42e3c7->leave($__internal_a6bc59676b484430b080374b279468cb119790fff9d9c0eaaf5a4e35ab42e3c7_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b0b3d339c0d4c224b74ad8ece111ca89d73752f919e8f47ee50a3d35b2120eb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0b3d339c0d4c224b74ad8ece111ca89d73752f919e8f47ee50a3d35b2120eb7->enter($__internal_b0b3d339c0d4c224b74ad8ece111ca89d73752f919e8f47ee50a3d35b2120eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9e125b5becd0118cfbe928fa674bc7f65ff755563f69917afde3899c05be1799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e125b5becd0118cfbe928fa674bc7f65ff755563f69917afde3899c05be1799->enter($__internal_9e125b5becd0118cfbe928fa674bc7f65ff755563f69917afde3899c05be1799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_9e125b5becd0118cfbe928fa674bc7f65ff755563f69917afde3899c05be1799->leave($__internal_9e125b5becd0118cfbe928fa674bc7f65ff755563f69917afde3899c05be1799_prof);

        
        $__internal_b0b3d339c0d4c224b74ad8ece111ca89d73752f919e8f47ee50a3d35b2120eb7->leave($__internal_b0b3d339c0d4c224b74ad8ece111ca89d73752f919e8f47ee50a3d35b2120eb7_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e3a3720ded6a4b46c1476fb8b0374bbbe247f63cbc6bba8916ce98a8c59eb5ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3a3720ded6a4b46c1476fb8b0374bbbe247f63cbc6bba8916ce98a8c59eb5ae->enter($__internal_e3a3720ded6a4b46c1476fb8b0374bbbe247f63cbc6bba8916ce98a8c59eb5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c39a70cc67df4e6598a6d805ddf97f88be4781bf4b830fd85325473403b68407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c39a70cc67df4e6598a6d805ddf97f88be4781bf4b830fd85325473403b68407->enter($__internal_c39a70cc67df4e6598a6d805ddf97f88be4781bf4b830fd85325473403b68407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c39a70cc67df4e6598a6d805ddf97f88be4781bf4b830fd85325473403b68407->leave($__internal_c39a70cc67df4e6598a6d805ddf97f88be4781bf4b830fd85325473403b68407_prof);

        
        $__internal_e3a3720ded6a4b46c1476fb8b0374bbbe247f63cbc6bba8916ce98a8c59eb5ae->leave($__internal_e3a3720ded6a4b46c1476fb8b0374bbbe247f63cbc6bba8916ce98a8c59eb5ae_prof);

    }

    public function getTemplateName()
    {
        return "@MAUser/Security/login_content.html.twig";
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




", "@MAUser/Security/login_content.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Security\\login_content.html.twig");
    }
}
