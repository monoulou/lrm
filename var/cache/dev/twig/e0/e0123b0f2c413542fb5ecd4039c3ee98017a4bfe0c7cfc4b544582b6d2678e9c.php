<?php

/* @MAUser/Resetting/check_email.html.twig */
class __TwigTemplate_c8947afcd5ced558fc4cc3ec35154aff029406b1537de30bcb3164c78fcfe2aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@MAUser/Resetting/check_email.html.twig", 1);
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
        $__internal_b93e424ecc3a6f6d0db3c939108f07e3d238f8773a5ca3203faa64f6b4a61696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b93e424ecc3a6f6d0db3c939108f07e3d238f8773a5ca3203faa64f6b4a61696->enter($__internal_b93e424ecc3a6f6d0db3c939108f07e3d238f8773a5ca3203faa64f6b4a61696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Resetting/check_email.html.twig"));

        $__internal_15185da40ce026477637cb9a608e7e9a06ecd08a1ba6c60175f3aafa24567cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15185da40ce026477637cb9a608e7e9a06ecd08a1ba6c60175f3aafa24567cf7->enter($__internal_15185da40ce026477637cb9a608e7e9a06ecd08a1ba6c60175f3aafa24567cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b93e424ecc3a6f6d0db3c939108f07e3d238f8773a5ca3203faa64f6b4a61696->leave($__internal_b93e424ecc3a6f6d0db3c939108f07e3d238f8773a5ca3203faa64f6b4a61696_prof);

        
        $__internal_15185da40ce026477637cb9a608e7e9a06ecd08a1ba6c60175f3aafa24567cf7->leave($__internal_15185da40ce026477637cb9a608e7e9a06ecd08a1ba6c60175f3aafa24567cf7_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_10cdf61a183bbd6cadbaadb8184d4b1ac5cb453c29e3b4c6aa53a7aea9f5b718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10cdf61a183bbd6cadbaadb8184d4b1ac5cb453c29e3b4c6aa53a7aea9f5b718->enter($__internal_10cdf61a183bbd6cadbaadb8184d4b1ac5cb453c29e3b4c6aa53a7aea9f5b718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7ca26486f0d65cb23d804fbe5aeed82231d3e63c41f476d89e13c489e9d86ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca26486f0d65cb23d804fbe5aeed82231d3e63c41f476d89e13c489e9d86ae8->enter($__internal_7ca26486f0d65cb23d804fbe5aeed82231d3e63c41f476d89e13c489e9d86ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/check_email.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_7ca26486f0d65cb23d804fbe5aeed82231d3e63c41f476d89e13c489e9d86ae8->leave($__internal_7ca26486f0d65cb23d804fbe5aeed82231d3e63c41f476d89e13c489e9d86ae8_prof);

        
        $__internal_10cdf61a183bbd6cadbaadb8184d4b1ac5cb453c29e3b4c6aa53a7aea9f5b718->leave($__internal_10cdf61a183bbd6cadbaadb8184d4b1ac5cb453c29e3b4c6aa53a7aea9f5b718_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d1a30f97863333e4915ac4425ccb82f50e494bff5bea29b769f163928bd328a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1a30f97863333e4915ac4425ccb82f50e494bff5bea29b769f163928bd328a8->enter($__internal_d1a30f97863333e4915ac4425ccb82f50e494bff5bea29b769f163928bd328a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7562bc3fe43ab8f6bb9d6b2ac07c11673e73a1da03ed227e49bfa5cf3d7ff221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7562bc3fe43ab8f6bb9d6b2ac07c11673e73a1da03ed227e49bfa5cf3d7ff221->enter($__internal_7562bc3fe43ab8f6bb9d6b2ac07c11673e73a1da03ed227e49bfa5cf3d7ff221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "    <div class=\"container-fluid\" id=\"check_email_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-9 col-lg-3\">
                <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Retourner vers la page de connexion</a>
            </div>
        </div>
        <div class=\"row\">
            <h3 id=\"check_email_title\">RE-INITIALISATION DU MOT DE PASSE</h3><hr style=\"border: 1px solid darkgray; margin-left: 25px; margin-right: 25px \">
        </div>
        <div class=\"row\" id=\"message_check_email\">
            ";
        // line 20
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
        </div>
    </div>
";
        
        $__internal_7562bc3fe43ab8f6bb9d6b2ac07c11673e73a1da03ed227e49bfa5cf3d7ff221->leave($__internal_7562bc3fe43ab8f6bb9d6b2ac07c11673e73a1da03ed227e49bfa5cf3d7ff221_prof);

        
        $__internal_d1a30f97863333e4915ac4425ccb82f50e494bff5bea29b769f163928bd328a8->leave($__internal_d1a30f97863333e4915ac4425ccb82f50e494bff5bea29b769f163928bd328a8_prof);

    }

    public function getTemplateName()
    {
        return "@MAUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 20,  77 => 13,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 1,);
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
    <link href=\"{{ asset ('css/check_email.css') }}\" rel='stylesheet' type='text/css' />
{% endblock %}

{% block fos_user_content %}
    <div class=\"container-fluid\" id=\"check_email_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-9 col-lg-3\">
                <a href=\"{{ path('fos_user_security_login') }}\">Retourner vers la page de connexion</a>
            </div>
        </div>
        <div class=\"row\">
            <h3 id=\"check_email_title\">RE-INITIALISATION DU MOT DE PASSE</h3><hr style=\"border: 1px solid darkgray; margin-left: 25px; margin-right: 25px \">
        </div>
        <div class=\"row\" id=\"message_check_email\">
            {{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
        </div>
    </div>
{% endblock %}", "@MAUser/Resetting/check_email.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
