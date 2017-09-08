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
        $__internal_aae6f9089269f1f95a50e6f59068c9542ecf38d571917afabefd90f603d46b71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aae6f9089269f1f95a50e6f59068c9542ecf38d571917afabefd90f603d46b71->enter($__internal_aae6f9089269f1f95a50e6f59068c9542ecf38d571917afabefd90f603d46b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Security:login_content.html.twig"));

        $__internal_3e282e87646d286f32089ef4e1d79bf9e848726357ebc2f5bfeabfb590bddb34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e282e87646d286f32089ef4e1d79bf9e848726357ebc2f5bfeabfb590bddb34->enter($__internal_3e282e87646d286f32089ef4e1d79bf9e848726357ebc2f5bfeabfb590bddb34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Security:login_content.html.twig"));

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
        
        $__internal_aae6f9089269f1f95a50e6f59068c9542ecf38d571917afabefd90f603d46b71->leave($__internal_aae6f9089269f1f95a50e6f59068c9542ecf38d571917afabefd90f603d46b71_prof);

        
        $__internal_3e282e87646d286f32089ef4e1d79bf9e848726357ebc2f5bfeabfb590bddb34->leave($__internal_3e282e87646d286f32089ef4e1d79bf9e848726357ebc2f5bfeabfb590bddb34_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d75a63e46f262031f17a4c1e0d512a65f0aa2efd31c6ca72fb11e26f9fe47bbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d75a63e46f262031f17a4c1e0d512a65f0aa2efd31c6ca72fb11e26f9fe47bbb->enter($__internal_d75a63e46f262031f17a4c1e0d512a65f0aa2efd31c6ca72fb11e26f9fe47bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e4ed1d084f2265074199f85fbf8f19ca1df29dffe62d005bc153924f58b73210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ed1d084f2265074199f85fbf8f19ca1df29dffe62d005bc153924f58b73210->enter($__internal_e4ed1d084f2265074199f85fbf8f19ca1df29dffe62d005bc153924f58b73210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />

";
        
        $__internal_e4ed1d084f2265074199f85fbf8f19ca1df29dffe62d005bc153924f58b73210->leave($__internal_e4ed1d084f2265074199f85fbf8f19ca1df29dffe62d005bc153924f58b73210_prof);

        
        $__internal_d75a63e46f262031f17a4c1e0d512a65f0aa2efd31c6ca72fb11e26f9fe47bbb->leave($__internal_d75a63e46f262031f17a4c1e0d512a65f0aa2efd31c6ca72fb11e26f9fe47bbb_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df1ec510f099d91066917435895b60e5957f23bdb01f056a66c9abf4e83c1826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df1ec510f099d91066917435895b60e5957f23bdb01f056a66c9abf4e83c1826->enter($__internal_df1ec510f099d91066917435895b60e5957f23bdb01f056a66c9abf4e83c1826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6e8355aa7300a7894f37e15607dbbf62e3e00d21224b3a89dfcd2de6333fa8cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e8355aa7300a7894f37e15607dbbf62e3e00d21224b3a89dfcd2de6333fa8cd->enter($__internal_6e8355aa7300a7894f37e15607dbbf62e3e00d21224b3a89dfcd2de6333fa8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_6e8355aa7300a7894f37e15607dbbf62e3e00d21224b3a89dfcd2de6333fa8cd->leave($__internal_6e8355aa7300a7894f37e15607dbbf62e3e00d21224b3a89dfcd2de6333fa8cd_prof);

        
        $__internal_df1ec510f099d91066917435895b60e5957f23bdb01f056a66c9abf4e83c1826->leave($__internal_df1ec510f099d91066917435895b60e5957f23bdb01f056a66c9abf4e83c1826_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a962b31b43c98a5aba27b199791f1eecbc2162c00d7ce52ed97a891e0ad153da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a962b31b43c98a5aba27b199791f1eecbc2162c00d7ce52ed97a891e0ad153da->enter($__internal_a962b31b43c98a5aba27b199791f1eecbc2162c00d7ce52ed97a891e0ad153da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7c37dcb958e7e1c130aa76139cee50593b268096f9aed450e542a0f3cf2bc815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c37dcb958e7e1c130aa76139cee50593b268096f9aed450e542a0f3cf2bc815->enter($__internal_7c37dcb958e7e1c130aa76139cee50593b268096f9aed450e542a0f3cf2bc815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7c37dcb958e7e1c130aa76139cee50593b268096f9aed450e542a0f3cf2bc815->leave($__internal_7c37dcb958e7e1c130aa76139cee50593b268096f9aed450e542a0f3cf2bc815_prof);

        
        $__internal_a962b31b43c98a5aba27b199791f1eecbc2162c00d7ce52ed97a891e0ad153da->leave($__internal_a962b31b43c98a5aba27b199791f1eecbc2162c00d7ce52ed97a891e0ad153da_prof);

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
