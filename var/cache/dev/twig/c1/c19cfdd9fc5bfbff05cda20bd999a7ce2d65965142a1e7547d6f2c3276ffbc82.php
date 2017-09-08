<?php

/* MAUserBundle:Resetting:request.html.twig */
class __TwigTemplate_37ee299556defd635d199ad42b15bfb76b454a93a4119058f233f0828da2ae93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "MAUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_e0bd014e995d439251261f2cf906e7762102c45e1694e3cc0499e93e472c2742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0bd014e995d439251261f2cf906e7762102c45e1694e3cc0499e93e472c2742->enter($__internal_e0bd014e995d439251261f2cf906e7762102c45e1694e3cc0499e93e472c2742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:request.html.twig"));

        $__internal_cc524b3f8b9ad0cd0d948b5649dc64742db0b131ac367011311731f873446982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc524b3f8b9ad0cd0d948b5649dc64742db0b131ac367011311731f873446982->enter($__internal_cc524b3f8b9ad0cd0d948b5649dc64742db0b131ac367011311731f873446982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0bd014e995d439251261f2cf906e7762102c45e1694e3cc0499e93e472c2742->leave($__internal_e0bd014e995d439251261f2cf906e7762102c45e1694e3cc0499e93e472c2742_prof);

        
        $__internal_cc524b3f8b9ad0cd0d948b5649dc64742db0b131ac367011311731f873446982->leave($__internal_cc524b3f8b9ad0cd0d948b5649dc64742db0b131ac367011311731f873446982_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f9a42c41ff061189a276e008665af98af1d14e493b8c5701225db718cfb97c67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9a42c41ff061189a276e008665af98af1d14e493b8c5701225db718cfb97c67->enter($__internal_f9a42c41ff061189a276e008665af98af1d14e493b8c5701225db718cfb97c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cf46cce11dc60734b24a266ba466c3a99f766ffeedcb721f37425ec5e1ba1922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf46cce11dc60734b24a266ba466c3a99f766ffeedcb721f37425ec5e1ba1922->enter($__internal_cf46cce11dc60734b24a266ba466c3a99f766ffeedcb721f37425ec5e1ba1922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "MAUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_cf46cce11dc60734b24a266ba466c3a99f766ffeedcb721f37425ec5e1ba1922->leave($__internal_cf46cce11dc60734b24a266ba466c3a99f766ffeedcb721f37425ec5e1ba1922_prof);

        
        $__internal_f9a42c41ff061189a276e008665af98af1d14e493b8c5701225db718cfb97c67->leave($__internal_f9a42c41ff061189a276e008665af98af1d14e493b8c5701225db718cfb97c67_prof);

    }

    public function getTemplateName()
    {
        return "MAUserBundle:Resetting:request.html.twig";
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
    {% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}", "MAUserBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle/Resources/views/Resetting/request.html.twig");
    }
}
