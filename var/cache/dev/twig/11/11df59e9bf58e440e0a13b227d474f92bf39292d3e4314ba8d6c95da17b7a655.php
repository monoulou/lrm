<?php

/* @MAUser/Registration/confirmed.html.twig */
class __TwigTemplate_6c005dd74dc74a06e62efee7778a2ee0f40fa4e37829f2e1908fe7ce7633309f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@MAUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfe2b1aa73e9d79054f73e3f8bc4d4ce825e88d2f12492062d4a4fd276f384ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfe2b1aa73e9d79054f73e3f8bc4d4ce825e88d2f12492062d4a4fd276f384ac->enter($__internal_cfe2b1aa73e9d79054f73e3f8bc4d4ce825e88d2f12492062d4a4fd276f384ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Registration/confirmed.html.twig"));

        $__internal_03647644aed818107e9e5a2ecc834dca7b9ded332fa0aa1583276a7534be72f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03647644aed818107e9e5a2ecc834dca7b9ded332fa0aa1583276a7534be72f2->enter($__internal_03647644aed818107e9e5a2ecc834dca7b9ded332fa0aa1583276a7534be72f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfe2b1aa73e9d79054f73e3f8bc4d4ce825e88d2f12492062d4a4fd276f384ac->leave($__internal_cfe2b1aa73e9d79054f73e3f8bc4d4ce825e88d2f12492062d4a4fd276f384ac_prof);

        
        $__internal_03647644aed818107e9e5a2ecc834dca7b9ded332fa0aa1583276a7534be72f2->leave($__internal_03647644aed818107e9e5a2ecc834dca7b9ded332fa0aa1583276a7534be72f2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e40fda9951a687f92f0d1c5039b18a1db6ce7956f93ab94c902fdb668f2b908a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e40fda9951a687f92f0d1c5039b18a1db6ce7956f93ab94c902fdb668f2b908a->enter($__internal_e40fda9951a687f92f0d1c5039b18a1db6ce7956f93ab94c902fdb668f2b908a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bf7d1f09d6a58dd546dc189c1d9019ecb355b3d8dcac67af9f55ee666887f1e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf7d1f09d6a58dd546dc189c1d9019ecb355b3d8dcac67af9f55ee666887f1e0->enter($__internal_bf7d1f09d6a58dd546dc189c1d9019ecb355b3d8dcac67af9f55ee666887f1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/confirmed.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_bf7d1f09d6a58dd546dc189c1d9019ecb355b3d8dcac67af9f55ee666887f1e0->leave($__internal_bf7d1f09d6a58dd546dc189c1d9019ecb355b3d8dcac67af9f55ee666887f1e0_prof);

        
        $__internal_e40fda9951a687f92f0d1c5039b18a1db6ce7956f93ab94c902fdb668f2b908a->leave($__internal_e40fda9951a687f92f0d1c5039b18a1db6ce7956f93ab94c902fdb668f2b908a_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2b6f1579853fabbbd75bca5de8394dc3bfa7bec67b4650fa8a72747ef4987d65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b6f1579853fabbbd75bca5de8394dc3bfa7bec67b4650fa8a72747ef4987d65->enter($__internal_2b6f1579853fabbbd75bca5de8394dc3bfa7bec67b4650fa8a72747ef4987d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_923221c30c2b999782c2be97d30e697453df39e11fa690635eb326c4abcc5de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_923221c30c2b999782c2be97d30e697453df39e11fa690635eb326c4abcc5de9->enter($__internal_923221c30c2b999782c2be97d30e697453df39e11fa690635eb326c4abcc5de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "    <div class=\"container-fluid\" id=\"confirmed_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-10 col-lg-2\">
                <p><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Déconnecter l'utilisateur</a></p>
            </div>
        </div>
        <div class=\"row\">
            <h3 style=\"margin-left: 15px\">CONFIRMATION DE CREATION DE COMPTE</h3><hr style=\"border: 1px solid darkgray; margin-left: 25px; margin-right: 25px \">
        </div>
        <div class=\"row\">
            <div class=\"col-lg-5\" id=\"confirmed_message\">
            <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
            ";
        // line 22
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 23
            echo "                <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
            ";
        }
        // line 25
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_923221c30c2b999782c2be97d30e697453df39e11fa690635eb326c4abcc5de9->leave($__internal_923221c30c2b999782c2be97d30e697453df39e11fa690635eb326c4abcc5de9_prof);

        
        $__internal_2b6f1579853fabbbd75bca5de8394dc3bfa7bec67b4650fa8a72747ef4987d65->leave($__internal_2b6f1579853fabbbd75bca5de8394dc3bfa7bec67b4650fa8a72747ef4987d65_prof);

    }

    public function getTemplateName()
    {
        return "@MAUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 25,  94 => 23,  92 => 22,  88 => 21,  77 => 13,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block stylesheets %}
<link href=\"{{ asset ('css/confirmed.css') }}\" rel='stylesheet' type='text/css' />
{% endblock %}

{% block fos_user_content %}
    <div class=\"container-fluid\" id=\"confirmed_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-10 col-lg-2\">
                <p><a href=\"{{ path('fos_user_security_logout') }}\">Déconnecter l'utilisateur</a></p>
            </div>
        </div>
        <div class=\"row\">
            <h3 style=\"margin-left: 15px\">CONFIRMATION DE CREATION DE COMPTE</h3><hr style=\"border: 1px solid darkgray; margin-left: 25px; margin-right: 25px \">
        </div>
        <div class=\"row\">
            <div class=\"col-lg-5\" id=\"confirmed_message\">
            <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
            {% if targetUrl %}
                <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
            {% endif %}
            </div>
        </div>
    </div>
{% endblock fos_user_content %}", "@MAUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
