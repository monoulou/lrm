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
        $__internal_96f297ec67ece07786ece6c1d44e4c6993cbea17392ca4eb9f068f6ef45a48dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96f297ec67ece07786ece6c1d44e4c6993cbea17392ca4eb9f068f6ef45a48dc->enter($__internal_96f297ec67ece07786ece6c1d44e4c6993cbea17392ca4eb9f068f6ef45a48dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_69767fe86e7e607960d8f4e0a021087b211e1d8ba9c664b2083c54390e300159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69767fe86e7e607960d8f4e0a021087b211e1d8ba9c664b2083c54390e300159->enter($__internal_69767fe86e7e607960d8f4e0a021087b211e1d8ba9c664b2083c54390e300159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

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
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "



";
        
        $__internal_96f297ec67ece07786ece6c1d44e4c6993cbea17392ca4eb9f068f6ef45a48dc->leave($__internal_96f297ec67ece07786ece6c1d44e4c6993cbea17392ca4eb9f068f6ef45a48dc_prof);

        
        $__internal_69767fe86e7e607960d8f4e0a021087b211e1d8ba9c664b2083c54390e300159->leave($__internal_69767fe86e7e607960d8f4e0a021087b211e1d8ba9c664b2083c54390e300159_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9eacdc35dd84c2aaaf1e6cb9b7797bdf53e486b4bd92622cd78aee8cd23c282b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eacdc35dd84c2aaaf1e6cb9b7797bdf53e486b4bd92622cd78aee8cd23c282b->enter($__internal_9eacdc35dd84c2aaaf1e6cb9b7797bdf53e486b4bd92622cd78aee8cd23c282b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_003abd1d6b0b8ddcdc5882ff39321bd2ff7b9fa6feda88381fc38ae85b781080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_003abd1d6b0b8ddcdc5882ff39321bd2ff7b9fa6feda88381fc38ae85b781080->enter($__internal_003abd1d6b0b8ddcdc5882ff39321bd2ff7b9fa6feda88381fc38ae85b781080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />

";
        
        $__internal_003abd1d6b0b8ddcdc5882ff39321bd2ff7b9fa6feda88381fc38ae85b781080->leave($__internal_003abd1d6b0b8ddcdc5882ff39321bd2ff7b9fa6feda88381fc38ae85b781080_prof);

        
        $__internal_9eacdc35dd84c2aaaf1e6cb9b7797bdf53e486b4bd92622cd78aee8cd23c282b->leave($__internal_9eacdc35dd84c2aaaf1e6cb9b7797bdf53e486b4bd92622cd78aee8cd23c282b_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a3c05b535b9fda04b0e3ca09aa1c8d7dff4ba2b937af3355a264318d537c9514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3c05b535b9fda04b0e3ca09aa1c8d7dff4ba2b937af3355a264318d537c9514->enter($__internal_a3c05b535b9fda04b0e3ca09aa1c8d7dff4ba2b937af3355a264318d537c9514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_abaed0797fc620655f56c6892023bdcb57e8c9dcc5a5e3cfb292d4761122db08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abaed0797fc620655f56c6892023bdcb57e8c9dcc5a5e3cfb292d4761122db08->enter($__internal_abaed0797fc620655f56c6892023bdcb57e8c9dcc5a5e3cfb292d4761122db08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
                        <div class=\"alert alert-danger\" id=\"message_error\">IDENTIFIANTS INCORRECTS</div>
                    </div>
                    <!--<div class=\"alert alert-danger\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>-->
                </div>
            ";
        }
        // line 24
        echo "            <div class=\"col-lg-offset-4 col-lg-4\" id=\"form_box\">
                <form class=\"form-horizontal\" action=\"";
        // line 25
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
        // line 34
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
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                </div>
                                <div><a href=\"";
        // line 50
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
        
        $__internal_abaed0797fc620655f56c6892023bdcb57e8c9dcc5a5e3cfb292d4761122db08->leave($__internal_abaed0797fc620655f56c6892023bdcb57e8c9dcc5a5e3cfb292d4761122db08_prof);

        
        $__internal_a3c05b535b9fda04b0e3ca09aa1c8d7dff4ba2b937af3355a264318d537c9514->leave($__internal_a3c05b535b9fda04b0e3ca09aa1c8d7dff4ba2b937af3355a264318d537c9514_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_92de3b740403cb8a06c1058a875a7462632202850ce2c1779a66b4729429fcaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92de3b740403cb8a06c1058a875a7462632202850ce2c1779a66b4729429fcaa->enter($__internal_92de3b740403cb8a06c1058a875a7462632202850ce2c1779a66b4729429fcaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_967709982d3aba158d2da993e2ed6fce8c18469ed695c81f8d0b0a2d5802c6dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_967709982d3aba158d2da993e2ed6fce8c18469ed695c81f8d0b0a2d5802c6dd->enter($__internal_967709982d3aba158d2da993e2ed6fce8c18469ed695c81f8d0b0a2d5802c6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_967709982d3aba158d2da993e2ed6fce8c18469ed695c81f8d0b0a2d5802c6dd->leave($__internal_967709982d3aba158d2da993e2ed6fce8c18469ed695c81f8d0b0a2d5802c6dd_prof);

        
        $__internal_92de3b740403cb8a06c1058a875a7462632202850ce2c1779a66b4729429fcaa->leave($__internal_92de3b740403cb8a06c1058a875a7462632202850ce2c1779a66b4729429fcaa_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  177 => 67,  151 => 50,  145 => 47,  129 => 34,  117 => 25,  114 => 24,  108 => 21,  102 => 17,  99 => 16,  92 => 10,  83 => 9,  69 => 5,  60 => 4,  46 => 69,  44 => 67,  41 => 66,  39 => 9,  36 => 8,  34 => 4,  31 => 3,  28 => 1,);
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
                        <div class=\"alert alert-danger\" id=\"message_error\">IDENTIFIANTS INCORRECTS</div>
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
