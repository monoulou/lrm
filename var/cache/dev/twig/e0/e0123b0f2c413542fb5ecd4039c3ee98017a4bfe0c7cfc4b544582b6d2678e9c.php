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
        $__internal_00e06b0b55c8b41a60f5aa7ce5c5b56d90d68274c7b2b2028d8052f7df0b9e52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00e06b0b55c8b41a60f5aa7ce5c5b56d90d68274c7b2b2028d8052f7df0b9e52->enter($__internal_00e06b0b55c8b41a60f5aa7ce5c5b56d90d68274c7b2b2028d8052f7df0b9e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Resetting/check_email.html.twig"));

        $__internal_3a126406ef9a3cf85870bf786fe0745bf00e83588dc0f68ffc6d6c21e9e897d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a126406ef9a3cf85870bf786fe0745bf00e83588dc0f68ffc6d6c21e9e897d3->enter($__internal_3a126406ef9a3cf85870bf786fe0745bf00e83588dc0f68ffc6d6c21e9e897d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00e06b0b55c8b41a60f5aa7ce5c5b56d90d68274c7b2b2028d8052f7df0b9e52->leave($__internal_00e06b0b55c8b41a60f5aa7ce5c5b56d90d68274c7b2b2028d8052f7df0b9e52_prof);

        
        $__internal_3a126406ef9a3cf85870bf786fe0745bf00e83588dc0f68ffc6d6c21e9e897d3->leave($__internal_3a126406ef9a3cf85870bf786fe0745bf00e83588dc0f68ffc6d6c21e9e897d3_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8cb62a4bc75ecaf21c74b9a7a0ce13e939114c484f25cee90d15d96be2d6552e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cb62a4bc75ecaf21c74b9a7a0ce13e939114c484f25cee90d15d96be2d6552e->enter($__internal_8cb62a4bc75ecaf21c74b9a7a0ce13e939114c484f25cee90d15d96be2d6552e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_964060098e3c1c90f487f0f07c25a6279ca2b69c6e9aa0a05f7e848fecf66b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_964060098e3c1c90f487f0f07c25a6279ca2b69c6e9aa0a05f7e848fecf66b1c->enter($__internal_964060098e3c1c90f487f0f07c25a6279ca2b69c6e9aa0a05f7e848fecf66b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/check_email.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_964060098e3c1c90f487f0f07c25a6279ca2b69c6e9aa0a05f7e848fecf66b1c->leave($__internal_964060098e3c1c90f487f0f07c25a6279ca2b69c6e9aa0a05f7e848fecf66b1c_prof);

        
        $__internal_8cb62a4bc75ecaf21c74b9a7a0ce13e939114c484f25cee90d15d96be2d6552e->leave($__internal_8cb62a4bc75ecaf21c74b9a7a0ce13e939114c484f25cee90d15d96be2d6552e_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5328bae20969b9150edac840c13676486c7c6af31cdbccf0e392c54d9b0f060d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5328bae20969b9150edac840c13676486c7c6af31cdbccf0e392c54d9b0f060d->enter($__internal_5328bae20969b9150edac840c13676486c7c6af31cdbccf0e392c54d9b0f060d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9aa79e73742bf2c8e43db694993d9af6ab68f51275d0fb8e5a75b1c5a9e8da83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa79e73742bf2c8e43db694993d9af6ab68f51275d0fb8e5a75b1c5a9e8da83->enter($__internal_9aa79e73742bf2c8e43db694993d9af6ab68f51275d0fb8e5a75b1c5a9e8da83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_9aa79e73742bf2c8e43db694993d9af6ab68f51275d0fb8e5a75b1c5a9e8da83->leave($__internal_9aa79e73742bf2c8e43db694993d9af6ab68f51275d0fb8e5a75b1c5a9e8da83_prof);

        
        $__internal_5328bae20969b9150edac840c13676486c7c6af31cdbccf0e392c54d9b0f060d->leave($__internal_5328bae20969b9150edac840c13676486c7c6af31cdbccf0e392c54d9b0f060d_prof);

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
