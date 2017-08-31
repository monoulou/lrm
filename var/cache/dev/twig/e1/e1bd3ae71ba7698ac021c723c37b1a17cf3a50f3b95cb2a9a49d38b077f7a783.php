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
        $__internal_b9f5ebd3a8d9e3416b9c2236bfa32014a41b92464427cbaa2397d77b2848ec59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9f5ebd3a8d9e3416b9c2236bfa32014a41b92464427cbaa2397d77b2848ec59->enter($__internal_b9f5ebd3a8d9e3416b9c2236bfa32014a41b92464427cbaa2397d77b2848ec59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Security:login_content.html.twig"));

        $__internal_b7b79e3927a618847aa1229f2fb14e175aa8dca4befb074918b092439da242af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b79e3927a618847aa1229f2fb14e175aa8dca4befb074918b092439da242af->enter($__internal_b7b79e3927a618847aa1229f2fb14e175aa8dca4befb074918b092439da242af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Security:login_content.html.twig"));

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
        
        $__internal_b9f5ebd3a8d9e3416b9c2236bfa32014a41b92464427cbaa2397d77b2848ec59->leave($__internal_b9f5ebd3a8d9e3416b9c2236bfa32014a41b92464427cbaa2397d77b2848ec59_prof);

        
        $__internal_b7b79e3927a618847aa1229f2fb14e175aa8dca4befb074918b092439da242af->leave($__internal_b7b79e3927a618847aa1229f2fb14e175aa8dca4befb074918b092439da242af_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1e26031c36becd5d093777463a961e6472b269c634d28235a01d8609cf9c7670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e26031c36becd5d093777463a961e6472b269c634d28235a01d8609cf9c7670->enter($__internal_1e26031c36becd5d093777463a961e6472b269c634d28235a01d8609cf9c7670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c97653074bc15817e3d8687b9e3691e3e5822c27a2600a4fd018b3b449db75fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c97653074bc15817e3d8687b9e3691e3e5822c27a2600a4fd018b3b449db75fc->enter($__internal_c97653074bc15817e3d8687b9e3691e3e5822c27a2600a4fd018b3b449db75fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />

";
        
        $__internal_c97653074bc15817e3d8687b9e3691e3e5822c27a2600a4fd018b3b449db75fc->leave($__internal_c97653074bc15817e3d8687b9e3691e3e5822c27a2600a4fd018b3b449db75fc_prof);

        
        $__internal_1e26031c36becd5d093777463a961e6472b269c634d28235a01d8609cf9c7670->leave($__internal_1e26031c36becd5d093777463a961e6472b269c634d28235a01d8609cf9c7670_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e23c625517fbf194ab63d4e888d4d2a9bbe030474ceb5344ec1037b77d4cbce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e23c625517fbf194ab63d4e888d4d2a9bbe030474ceb5344ec1037b77d4cbce->enter($__internal_0e23c625517fbf194ab63d4e888d4d2a9bbe030474ceb5344ec1037b77d4cbce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_717af014ed12f355e2d18861cc8ce0fff9f22a2234b236a12999b1dd12c76501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_717af014ed12f355e2d18861cc8ce0fff9f22a2234b236a12999b1dd12c76501->enter($__internal_717af014ed12f355e2d18861cc8ce0fff9f22a2234b236a12999b1dd12c76501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_717af014ed12f355e2d18861cc8ce0fff9f22a2234b236a12999b1dd12c76501->leave($__internal_717af014ed12f355e2d18861cc8ce0fff9f22a2234b236a12999b1dd12c76501_prof);

        
        $__internal_0e23c625517fbf194ab63d4e888d4d2a9bbe030474ceb5344ec1037b77d4cbce->leave($__internal_0e23c625517fbf194ab63d4e888d4d2a9bbe030474ceb5344ec1037b77d4cbce_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cf6f083821b4a09ff3e427f3e9e7cbd4e876a3b13e2a19cbe8c00f4c68f89ae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf6f083821b4a09ff3e427f3e9e7cbd4e876a3b13e2a19cbe8c00f4c68f89ae4->enter($__internal_cf6f083821b4a09ff3e427f3e9e7cbd4e876a3b13e2a19cbe8c00f4c68f89ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a9da3198819cec28a04f62446e5ce1e8a110ddd26816648472f34a5bd4f0b9df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9da3198819cec28a04f62446e5ce1e8a110ddd26816648472f34a5bd4f0b9df->enter($__internal_a9da3198819cec28a04f62446e5ce1e8a110ddd26816648472f34a5bd4f0b9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a9da3198819cec28a04f62446e5ce1e8a110ddd26816648472f34a5bd4f0b9df->leave($__internal_a9da3198819cec28a04f62446e5ce1e8a110ddd26816648472f34a5bd4f0b9df_prof);

        
        $__internal_cf6f083821b4a09ff3e427f3e9e7cbd4e876a3b13e2a19cbe8c00f4c68f89ae4->leave($__internal_cf6f083821b4a09ff3e427f3e9e7cbd4e876a3b13e2a19cbe8c00f4c68f89ae4_prof);

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
