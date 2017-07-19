<?php

/* MAUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_c84b4ab60fc2a41e0d272cff2611c02cfe2f85d0a8e1e3f99793dff9e8158908 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "MAUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_a33f12c48c8d0abd1c35e80b4b60aba277234dd21b44a11a5a08d8026baabc52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a33f12c48c8d0abd1c35e80b4b60aba277234dd21b44a11a5a08d8026baabc52->enter($__internal_a33f12c48c8d0abd1c35e80b4b60aba277234dd21b44a11a5a08d8026baabc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:check_email.html.twig"));

        $__internal_2bd8a23ae9965a8d97324b7daec5ff973666148c3c4c2a9c17508b3023357dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bd8a23ae9965a8d97324b7daec5ff973666148c3c4c2a9c17508b3023357dba->enter($__internal_2bd8a23ae9965a8d97324b7daec5ff973666148c3c4c2a9c17508b3023357dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a33f12c48c8d0abd1c35e80b4b60aba277234dd21b44a11a5a08d8026baabc52->leave($__internal_a33f12c48c8d0abd1c35e80b4b60aba277234dd21b44a11a5a08d8026baabc52_prof);

        
        $__internal_2bd8a23ae9965a8d97324b7daec5ff973666148c3c4c2a9c17508b3023357dba->leave($__internal_2bd8a23ae9965a8d97324b7daec5ff973666148c3c4c2a9c17508b3023357dba_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bacc70ed266eceeeb56a126e235ebdbcacc7bf1c16b72a9f1433c91e4b452ea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bacc70ed266eceeeb56a126e235ebdbcacc7bf1c16b72a9f1433c91e4b452ea0->enter($__internal_bacc70ed266eceeeb56a126e235ebdbcacc7bf1c16b72a9f1433c91e4b452ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7ca14f8a967ccb09f101ff62ec8b8248373f407135cee77dd4f0a2a593e9512f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca14f8a967ccb09f101ff62ec8b8248373f407135cee77dd4f0a2a593e9512f->enter($__internal_7ca14f8a967ccb09f101ff62ec8b8248373f407135cee77dd4f0a2a593e9512f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/check_email.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_7ca14f8a967ccb09f101ff62ec8b8248373f407135cee77dd4f0a2a593e9512f->leave($__internal_7ca14f8a967ccb09f101ff62ec8b8248373f407135cee77dd4f0a2a593e9512f_prof);

        
        $__internal_bacc70ed266eceeeb56a126e235ebdbcacc7bf1c16b72a9f1433c91e4b452ea0->leave($__internal_bacc70ed266eceeeb56a126e235ebdbcacc7bf1c16b72a9f1433c91e4b452ea0_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9981e54de0f841b796d9f26bceccfcd1b80e6b3550041abf5067d33c3aa2111c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9981e54de0f841b796d9f26bceccfcd1b80e6b3550041abf5067d33c3aa2111c->enter($__internal_9981e54de0f841b796d9f26bceccfcd1b80e6b3550041abf5067d33c3aa2111c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fae9c59c27c6ea1f1628fc644d88ae35c87d3482664c3a5cec1e5e7e5661758c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fae9c59c27c6ea1f1628fc644d88ae35c87d3482664c3a5cec1e5e7e5661758c->enter($__internal_fae9c59c27c6ea1f1628fc644d88ae35c87d3482664c3a5cec1e5e7e5661758c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_fae9c59c27c6ea1f1628fc644d88ae35c87d3482664c3a5cec1e5e7e5661758c->leave($__internal_fae9c59c27c6ea1f1628fc644d88ae35c87d3482664c3a5cec1e5e7e5661758c_prof);

        
        $__internal_9981e54de0f841b796d9f26bceccfcd1b80e6b3550041abf5067d33c3aa2111c->leave($__internal_9981e54de0f841b796d9f26bceccfcd1b80e6b3550041abf5067d33c3aa2111c_prof);

    }

    public function getTemplateName()
    {
        return "MAUserBundle:Resetting:check_email.html.twig";
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
{% endblock %}", "MAUserBundle:Resetting:check_email.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle/Resources/views/Resetting/check_email.html.twig");
    }
}
