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
        $__internal_a50492cbaac81764a8020ffb8eb7038165090a67d6271504640816498b6a5d29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a50492cbaac81764a8020ffb8eb7038165090a67d6271504640816498b6a5d29->enter($__internal_a50492cbaac81764a8020ffb8eb7038165090a67d6271504640816498b6a5d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Security/login_content.html.twig"));

        $__internal_400bcc9b3371a7b508fd9fb53c49198a5ddb4e2338e0f745e77e64e97662c23d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400bcc9b3371a7b508fd9fb53c49198a5ddb4e2338e0f745e77e64e97662c23d->enter($__internal_400bcc9b3371a7b508fd9fb53c49198a5ddb4e2338e0f745e77e64e97662c23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Security/login_content.html.twig"));

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
        
        $__internal_a50492cbaac81764a8020ffb8eb7038165090a67d6271504640816498b6a5d29->leave($__internal_a50492cbaac81764a8020ffb8eb7038165090a67d6271504640816498b6a5d29_prof);

        
        $__internal_400bcc9b3371a7b508fd9fb53c49198a5ddb4e2338e0f745e77e64e97662c23d->leave($__internal_400bcc9b3371a7b508fd9fb53c49198a5ddb4e2338e0f745e77e64e97662c23d_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1e536957c99c662a32c69a6b3dfd56b886f82616c2f1abc8dfb5ab56c756cbf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e536957c99c662a32c69a6b3dfd56b886f82616c2f1abc8dfb5ab56c756cbf9->enter($__internal_1e536957c99c662a32c69a6b3dfd56b886f82616c2f1abc8dfb5ab56c756cbf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d387b56071be3329e319046b9ea52addf560a1b1a42b90eb85c02a269f0f8056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d387b56071be3329e319046b9ea52addf560a1b1a42b90eb85c02a269f0f8056->enter($__internal_d387b56071be3329e319046b9ea52addf560a1b1a42b90eb85c02a269f0f8056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />

";
        
        $__internal_d387b56071be3329e319046b9ea52addf560a1b1a42b90eb85c02a269f0f8056->leave($__internal_d387b56071be3329e319046b9ea52addf560a1b1a42b90eb85c02a269f0f8056_prof);

        
        $__internal_1e536957c99c662a32c69a6b3dfd56b886f82616c2f1abc8dfb5ab56c756cbf9->leave($__internal_1e536957c99c662a32c69a6b3dfd56b886f82616c2f1abc8dfb5ab56c756cbf9_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0f4ba248a602d5f867827154d8676b57ffbdfdefc920a84c8191ffd5d8a88e74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f4ba248a602d5f867827154d8676b57ffbdfdefc920a84c8191ffd5d8a88e74->enter($__internal_0f4ba248a602d5f867827154d8676b57ffbdfdefc920a84c8191ffd5d8a88e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_90fd8126fac59a71cf9560c040d9bec8fd81a7483c55eaaad36d0be8bd9599b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90fd8126fac59a71cf9560c040d9bec8fd81a7483c55eaaad36d0be8bd9599b0->enter($__internal_90fd8126fac59a71cf9560c040d9bec8fd81a7483c55eaaad36d0be8bd9599b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_90fd8126fac59a71cf9560c040d9bec8fd81a7483c55eaaad36d0be8bd9599b0->leave($__internal_90fd8126fac59a71cf9560c040d9bec8fd81a7483c55eaaad36d0be8bd9599b0_prof);

        
        $__internal_0f4ba248a602d5f867827154d8676b57ffbdfdefc920a84c8191ffd5d8a88e74->leave($__internal_0f4ba248a602d5f867827154d8676b57ffbdfdefc920a84c8191ffd5d8a88e74_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f8401a37e4b8b4cd23533a14e77eb11916e960011968d8105379e2325670a884 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8401a37e4b8b4cd23533a14e77eb11916e960011968d8105379e2325670a884->enter($__internal_f8401a37e4b8b4cd23533a14e77eb11916e960011968d8105379e2325670a884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5d3f16a2363c877d1e1ba361d4c0343529005941b658f2b806c79a4540153ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d3f16a2363c877d1e1ba361d4c0343529005941b658f2b806c79a4540153ff2->enter($__internal_5d3f16a2363c877d1e1ba361d4c0343529005941b658f2b806c79a4540153ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5d3f16a2363c877d1e1ba361d4c0343529005941b658f2b806c79a4540153ff2->leave($__internal_5d3f16a2363c877d1e1ba361d4c0343529005941b658f2b806c79a4540153ff2_prof);

        
        $__internal_f8401a37e4b8b4cd23533a14e77eb11916e960011968d8105379e2325670a884->leave($__internal_f8401a37e4b8b4cd23533a14e77eb11916e960011968d8105379e2325670a884_prof);

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
