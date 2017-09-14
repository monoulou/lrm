<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_d1c63a43ba5a48f77414320208026645ee0912ecb43840b03ee28129d23bbf22 extends Twig_Template
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
        $__internal_2d129a0346fd23c6359e2b1575792a204096f22c20d415869c11cb674cefa72f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d129a0346fd23c6359e2b1575792a204096f22c20d415869c11cb674cefa72f->enter($__internal_2d129a0346fd23c6359e2b1575792a204096f22c20d415869c11cb674cefa72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

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
        
        $__internal_2d129a0346fd23c6359e2b1575792a204096f22c20d415869c11cb674cefa72f->leave($__internal_2d129a0346fd23c6359e2b1575792a204096f22c20d415869c11cb674cefa72f_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_65b5c01918951e178f882075d67c60f7f910adf0506285d456efd35561bffac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65b5c01918951e178f882075d67c60f7f910adf0506285d456efd35561bffac0->enter($__internal_65b5c01918951e178f882075d67c60f7f910adf0506285d456efd35561bffac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />

";
        
        $__internal_65b5c01918951e178f882075d67c60f7f910adf0506285d456efd35561bffac0->leave($__internal_65b5c01918951e178f882075d67c60f7f910adf0506285d456efd35561bffac0_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b6df1cf646376c23174149907c5243e8a533a7e66c8ab79abab72afc3409c5f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6df1cf646376c23174149907c5243e8a533a7e66c8ab79abab72afc3409c5f3->enter($__internal_b6df1cf646376c23174149907c5243e8a533a7e66c8ab79abab72afc3409c5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_b6df1cf646376c23174149907c5243e8a533a7e66c8ab79abab72afc3409c5f3->leave($__internal_b6df1cf646376c23174149907c5243e8a533a7e66c8ab79abab72afc3409c5f3_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0ca79c83284d09f9ef7c809ed61d0417f9e5ff5486d8c99c9b0da179581e44ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca79c83284d09f9ef7c809ed61d0417f9e5ff5486d8c99c9b0da179581e44ce->enter($__internal_0ca79c83284d09f9ef7c809ed61d0417f9e5ff5486d8c99c9b0da179581e44ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0ca79c83284d09f9ef7c809ed61d0417f9e5ff5486d8c99c9b0da179581e44ce->leave($__internal_0ca79c83284d09f9ef7c809ed61d0417f9e5ff5486d8c99c9b0da179581e44ce_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  162 => 70,  139 => 53,  133 => 50,  117 => 37,  105 => 28,  102 => 27,  96 => 24,  87 => 17,  84 => 16,  77 => 10,  71 => 9,  60 => 5,  54 => 4,  43 => 72,  41 => 70,  38 => 69,  36 => 9,  33 => 8,  31 => 4,  28 => 3,  25 => 1,);
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
