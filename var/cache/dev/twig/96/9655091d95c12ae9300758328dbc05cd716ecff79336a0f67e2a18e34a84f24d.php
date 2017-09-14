<?php

/* @FOSUser/Security/login_content.html.twig */
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
        $__internal_8eaca16b33865b25756a3e190c82535e823dc3ed8f0add5c3c236d7eeb4fc346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eaca16b33865b25756a3e190c82535e823dc3ed8f0add5c3c236d7eeb4fc346->enter($__internal_8eaca16b33865b25756a3e190c82535e823dc3ed8f0add5c3c236d7eeb4fc346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_e401f207e9affd392b0aa11df2c43aa4ccfbc2213b284565176bf03db95d7d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e401f207e9affd392b0aa11df2c43aa4ccfbc2213b284565176bf03db95d7d6b->enter($__internal_e401f207e9affd392b0aa11df2c43aa4ccfbc2213b284565176bf03db95d7d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

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
        
        $__internal_8eaca16b33865b25756a3e190c82535e823dc3ed8f0add5c3c236d7eeb4fc346->leave($__internal_8eaca16b33865b25756a3e190c82535e823dc3ed8f0add5c3c236d7eeb4fc346_prof);

        
        $__internal_e401f207e9affd392b0aa11df2c43aa4ccfbc2213b284565176bf03db95d7d6b->leave($__internal_e401f207e9affd392b0aa11df2c43aa4ccfbc2213b284565176bf03db95d7d6b_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8c94db7cf3bfdd54741b8ef9264a0f35904d413cabb06dd4caea617156afd37f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c94db7cf3bfdd54741b8ef9264a0f35904d413cabb06dd4caea617156afd37f->enter($__internal_8c94db7cf3bfdd54741b8ef9264a0f35904d413cabb06dd4caea617156afd37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cdcb08bc936021690372331d449678b1454849267bf86fbe6b8a9b879954e188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdcb08bc936021690372331d449678b1454849267bf86fbe6b8a9b879954e188->enter($__internal_cdcb08bc936021690372331d449678b1454849267bf86fbe6b8a9b879954e188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />

";
        
        $__internal_cdcb08bc936021690372331d449678b1454849267bf86fbe6b8a9b879954e188->leave($__internal_cdcb08bc936021690372331d449678b1454849267bf86fbe6b8a9b879954e188_prof);

        
        $__internal_8c94db7cf3bfdd54741b8ef9264a0f35904d413cabb06dd4caea617156afd37f->leave($__internal_8c94db7cf3bfdd54741b8ef9264a0f35904d413cabb06dd4caea617156afd37f_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_33f4c597e1a795753d7ec4cc3c0478649f3df7ca57b7c192dd71bf4172dac4f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33f4c597e1a795753d7ec4cc3c0478649f3df7ca57b7c192dd71bf4172dac4f4->enter($__internal_33f4c597e1a795753d7ec4cc3c0478649f3df7ca57b7c192dd71bf4172dac4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_788bdb4210125c849ac9d28b8e2198d6e40cd8a0b729aa19c4fd9bf49fac43d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_788bdb4210125c849ac9d28b8e2198d6e40cd8a0b729aa19c4fd9bf49fac43d5->enter($__internal_788bdb4210125c849ac9d28b8e2198d6e40cd8a0b729aa19c4fd9bf49fac43d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_788bdb4210125c849ac9d28b8e2198d6e40cd8a0b729aa19c4fd9bf49fac43d5->leave($__internal_788bdb4210125c849ac9d28b8e2198d6e40cd8a0b729aa19c4fd9bf49fac43d5_prof);

        
        $__internal_33f4c597e1a795753d7ec4cc3c0478649f3df7ca57b7c192dd71bf4172dac4f4->leave($__internal_33f4c597e1a795753d7ec4cc3c0478649f3df7ca57b7c192dd71bf4172dac4f4_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4aac0fa820bf5df54296a955a934514f8b594045f301999e730a48684f5397cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aac0fa820bf5df54296a955a934514f8b594045f301999e730a48684f5397cc->enter($__internal_4aac0fa820bf5df54296a955a934514f8b594045f301999e730a48684f5397cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2f9df7ab32d1bd706eeba2cc59257fa9b602bbd760034d1a6f7395ce73dafbc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f9df7ab32d1bd706eeba2cc59257fa9b602bbd760034d1a6f7395ce73dafbc5->enter($__internal_2f9df7ab32d1bd706eeba2cc59257fa9b602bbd760034d1a6f7395ce73dafbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2f9df7ab32d1bd706eeba2cc59257fa9b602bbd760034d1a6f7395ce73dafbc5->leave($__internal_2f9df7ab32d1bd706eeba2cc59257fa9b602bbd760034d1a6f7395ce73dafbc5_prof);

        
        $__internal_4aac0fa820bf5df54296a955a934514f8b594045f301999e730a48684f5397cc->leave($__internal_4aac0fa820bf5df54296a955a934514f8b594045f301999e730a48684f5397cc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
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




", "@FOSUser/Security/login_content.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Security\\login_content.html.twig");
    }
}
