<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_be86a5a82cb726c774d4c80603da8532662fd579e82ada2f5ae013f6379211fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f6129528fe7abade79183fc2b08d82660b4939a0bebdf50c2320466f843187e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f6129528fe7abade79183fc2b08d82660b4939a0bebdf50c2320466f843187e->enter($__internal_4f6129528fe7abade79183fc2b08d82660b4939a0bebdf50c2320466f843187e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_b925f94c3cc4756911e5474f1d137ae292a69f937cce1ffe6657b822ccb7fad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b925f94c3cc4756911e5474f1d137ae292a69f937cce1ffe6657b822ccb7fad9->enter($__internal_b925f94c3cc4756911e5474f1d137ae292a69f937cce1ffe6657b822ccb7fad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f6129528fe7abade79183fc2b08d82660b4939a0bebdf50c2320466f843187e->leave($__internal_4f6129528fe7abade79183fc2b08d82660b4939a0bebdf50c2320466f843187e_prof);

        
        $__internal_b925f94c3cc4756911e5474f1d137ae292a69f937cce1ffe6657b822ccb7fad9->leave($__internal_b925f94c3cc4756911e5474f1d137ae292a69f937cce1ffe6657b822ccb7fad9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca65f38f05be507ff4b6debed1a76f0967414646801aef59690ab56fba0aa61e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca65f38f05be507ff4b6debed1a76f0967414646801aef59690ab56fba0aa61e->enter($__internal_ca65f38f05be507ff4b6debed1a76f0967414646801aef59690ab56fba0aa61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8cb032ddac1970bb4d974f850c8dd3a7d43ca73f287f066f4786042e974a67a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cb032ddac1970bb4d974f850c8dd3a7d43ca73f287f066f4786042e974a67a0->enter($__internal_8cb032ddac1970bb4d974f850c8dd3a7d43ca73f287f066f4786042e974a67a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_8cb032ddac1970bb4d974f850c8dd3a7d43ca73f287f066f4786042e974a67a0->leave($__internal_8cb032ddac1970bb4d974f850c8dd3a7d43ca73f287f066f4786042e974a67a0_prof);

        
        $__internal_ca65f38f05be507ff4b6debed1a76f0967414646801aef59690ab56fba0aa61e->leave($__internal_ca65f38f05be507ff4b6debed1a76f0967414646801aef59690ab56fba0aa61e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
