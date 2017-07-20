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
        $__internal_4f2cdf873b746dd51a0295ebf9efe3cc41d674aefce830c5d7aa36dd863fdd14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f2cdf873b746dd51a0295ebf9efe3cc41d674aefce830c5d7aa36dd863fdd14->enter($__internal_4f2cdf873b746dd51a0295ebf9efe3cc41d674aefce830c5d7aa36dd863fdd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_cf742e188b8bca9bc6a0a6c43b1847dc34401ce15d3a871157b2f554c8ea3a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf742e188b8bca9bc6a0a6c43b1847dc34401ce15d3a871157b2f554c8ea3a95->enter($__internal_cf742e188b8bca9bc6a0a6c43b1847dc34401ce15d3a871157b2f554c8ea3a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

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
        
        $__internal_4f2cdf873b746dd51a0295ebf9efe3cc41d674aefce830c5d7aa36dd863fdd14->leave($__internal_4f2cdf873b746dd51a0295ebf9efe3cc41d674aefce830c5d7aa36dd863fdd14_prof);

        
        $__internal_cf742e188b8bca9bc6a0a6c43b1847dc34401ce15d3a871157b2f554c8ea3a95->leave($__internal_cf742e188b8bca9bc6a0a6c43b1847dc34401ce15d3a871157b2f554c8ea3a95_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_32829b289b63859663cf0625f02a7285fb7fcb9d02c3484f6ba7429dda4617e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32829b289b63859663cf0625f02a7285fb7fcb9d02c3484f6ba7429dda4617e9->enter($__internal_32829b289b63859663cf0625f02a7285fb7fcb9d02c3484f6ba7429dda4617e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ae3974f196cfc8bd452f0561a186fba7d2c27b34a63ca0b47b480abaf06a1722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae3974f196cfc8bd452f0561a186fba7d2c27b34a63ca0b47b480abaf06a1722->enter($__internal_ae3974f196cfc8bd452f0561a186fba7d2c27b34a63ca0b47b480abaf06a1722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />

";
        
        $__internal_ae3974f196cfc8bd452f0561a186fba7d2c27b34a63ca0b47b480abaf06a1722->leave($__internal_ae3974f196cfc8bd452f0561a186fba7d2c27b34a63ca0b47b480abaf06a1722_prof);

        
        $__internal_32829b289b63859663cf0625f02a7285fb7fcb9d02c3484f6ba7429dda4617e9->leave($__internal_32829b289b63859663cf0625f02a7285fb7fcb9d02c3484f6ba7429dda4617e9_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_85540b02f0312d7516daccf98feb367c6bcf5750ba079ae613899eb098073b5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85540b02f0312d7516daccf98feb367c6bcf5750ba079ae613899eb098073b5e->enter($__internal_85540b02f0312d7516daccf98feb367c6bcf5750ba079ae613899eb098073b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f3a11094984c4e69b275b282939509ba669727cfc7774db67389d4b574159dc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a11094984c4e69b275b282939509ba669727cfc7774db67389d4b574159dc7->enter($__internal_f3a11094984c4e69b275b282939509ba669727cfc7774db67389d4b574159dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_f3a11094984c4e69b275b282939509ba669727cfc7774db67389d4b574159dc7->leave($__internal_f3a11094984c4e69b275b282939509ba669727cfc7774db67389d4b574159dc7_prof);

        
        $__internal_85540b02f0312d7516daccf98feb367c6bcf5750ba079ae613899eb098073b5e->leave($__internal_85540b02f0312d7516daccf98feb367c6bcf5750ba079ae613899eb098073b5e_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_20c72dbdf176970ff2ba8a48119665ab3ebb6d8fe0b27bf028eafa99f0208a66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20c72dbdf176970ff2ba8a48119665ab3ebb6d8fe0b27bf028eafa99f0208a66->enter($__internal_20c72dbdf176970ff2ba8a48119665ab3ebb6d8fe0b27bf028eafa99f0208a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f0625fa9fac35fca9cf152427f9cf4892c6f8c59d3d673e7379129921980d34e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0625fa9fac35fca9cf152427f9cf4892c6f8c59d3d673e7379129921980d34e->enter($__internal_f0625fa9fac35fca9cf152427f9cf4892c6f8c59d3d673e7379129921980d34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f0625fa9fac35fca9cf152427f9cf4892c6f8c59d3d673e7379129921980d34e->leave($__internal_f0625fa9fac35fca9cf152427f9cf4892c6f8c59d3d673e7379129921980d34e_prof);

        
        $__internal_20c72dbdf176970ff2ba8a48119665ab3ebb6d8fe0b27bf028eafa99f0208a66->leave($__internal_20c72dbdf176970ff2ba8a48119665ab3ebb6d8fe0b27bf028eafa99f0208a66_prof);

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
