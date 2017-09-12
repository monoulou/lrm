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
        $__internal_f7a501a9e3046cd5eef133477866669f6e7f8da233285e5902a2ccf19e5c84b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7a501a9e3046cd5eef133477866669f6e7f8da233285e5902a2ccf19e5c84b4->enter($__internal_f7a501a9e3046cd5eef133477866669f6e7f8da233285e5902a2ccf19e5c84b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_02ae1107fed3d588b77545715f0e156b41db323cabee1e911537175e28b7f8ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ae1107fed3d588b77545715f0e156b41db323cabee1e911537175e28b7f8ef->enter($__internal_02ae1107fed3d588b77545715f0e156b41db323cabee1e911537175e28b7f8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

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
        
        $__internal_f7a501a9e3046cd5eef133477866669f6e7f8da233285e5902a2ccf19e5c84b4->leave($__internal_f7a501a9e3046cd5eef133477866669f6e7f8da233285e5902a2ccf19e5c84b4_prof);

        
        $__internal_02ae1107fed3d588b77545715f0e156b41db323cabee1e911537175e28b7f8ef->leave($__internal_02ae1107fed3d588b77545715f0e156b41db323cabee1e911537175e28b7f8ef_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_40f135740ee9324f5bac35359f72ce9c9a67f9fd04830162367f636905cb193c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40f135740ee9324f5bac35359f72ce9c9a67f9fd04830162367f636905cb193c->enter($__internal_40f135740ee9324f5bac35359f72ce9c9a67f9fd04830162367f636905cb193c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_acdc8832dfa9f62034f1e7150cbb87761bc7a283b108233dd7c2cfe0986d1997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acdc8832dfa9f62034f1e7150cbb87761bc7a283b108233dd7c2cfe0986d1997->enter($__internal_acdc8832dfa9f62034f1e7150cbb87761bc7a283b108233dd7c2cfe0986d1997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />

";
        
        $__internal_acdc8832dfa9f62034f1e7150cbb87761bc7a283b108233dd7c2cfe0986d1997->leave($__internal_acdc8832dfa9f62034f1e7150cbb87761bc7a283b108233dd7c2cfe0986d1997_prof);

        
        $__internal_40f135740ee9324f5bac35359f72ce9c9a67f9fd04830162367f636905cb193c->leave($__internal_40f135740ee9324f5bac35359f72ce9c9a67f9fd04830162367f636905cb193c_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7871e5d58b6a38d6633ffc1256bde8b69604fce19a1188cd6f98b318f4f7758b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7871e5d58b6a38d6633ffc1256bde8b69604fce19a1188cd6f98b318f4f7758b->enter($__internal_7871e5d58b6a38d6633ffc1256bde8b69604fce19a1188cd6f98b318f4f7758b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_55b84b89d52f915fd148d7d05c3dfd7b17b14e218b6d7d671e9c757e106b5e83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b84b89d52f915fd148d7d05c3dfd7b17b14e218b6d7d671e9c757e106b5e83->enter($__internal_55b84b89d52f915fd148d7d05c3dfd7b17b14e218b6d7d671e9c757e106b5e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_55b84b89d52f915fd148d7d05c3dfd7b17b14e218b6d7d671e9c757e106b5e83->leave($__internal_55b84b89d52f915fd148d7d05c3dfd7b17b14e218b6d7d671e9c757e106b5e83_prof);

        
        $__internal_7871e5d58b6a38d6633ffc1256bde8b69604fce19a1188cd6f98b318f4f7758b->leave($__internal_7871e5d58b6a38d6633ffc1256bde8b69604fce19a1188cd6f98b318f4f7758b_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4dba39d0936c887ab726e1770c135d401ef5131bce8448b4cee6d89a44b51208 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dba39d0936c887ab726e1770c135d401ef5131bce8448b4cee6d89a44b51208->enter($__internal_4dba39d0936c887ab726e1770c135d401ef5131bce8448b4cee6d89a44b51208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4bc4b10103b308a1600b580c520fe6203ce5deaf5399ef7b1e74766b6f09f4fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc4b10103b308a1600b580c520fe6203ce5deaf5399ef7b1e74766b6f09f4fd->enter($__internal_4bc4b10103b308a1600b580c520fe6203ce5deaf5399ef7b1e74766b6f09f4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4bc4b10103b308a1600b580c520fe6203ce5deaf5399ef7b1e74766b6f09f4fd->leave($__internal_4bc4b10103b308a1600b580c520fe6203ce5deaf5399ef7b1e74766b6f09f4fd_prof);

        
        $__internal_4dba39d0936c887ab726e1770c135d401ef5131bce8448b4cee6d89a44b51208->leave($__internal_4dba39d0936c887ab726e1770c135d401ef5131bce8448b4cee6d89a44b51208_prof);

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
