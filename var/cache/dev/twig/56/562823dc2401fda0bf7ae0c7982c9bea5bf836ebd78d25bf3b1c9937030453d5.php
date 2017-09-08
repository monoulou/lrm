<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_1fde650fed87ed42f5eab2fa72566a1c1e957499a68df2c15f0ffe14972924e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_385d125fce090f82c191871fa66837230aea445303f6d2d0807776cd242f702e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_385d125fce090f82c191871fa66837230aea445303f6d2d0807776cd242f702e->enter($__internal_385d125fce090f82c191871fa66837230aea445303f6d2d0807776cd242f702e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_36f2513384dd462b615c0cac4aba0a1cced9e5f2d317dc38478e74349411bab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36f2513384dd462b615c0cac4aba0a1cced9e5f2d317dc38478e74349411bab7->enter($__internal_36f2513384dd462b615c0cac4aba0a1cced9e5f2d317dc38478e74349411bab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_385d125fce090f82c191871fa66837230aea445303f6d2d0807776cd242f702e->leave($__internal_385d125fce090f82c191871fa66837230aea445303f6d2d0807776cd242f702e_prof);

        
        $__internal_36f2513384dd462b615c0cac4aba0a1cced9e5f2d317dc38478e74349411bab7->leave($__internal_36f2513384dd462b615c0cac4aba0a1cced9e5f2d317dc38478e74349411bab7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0fff2fb3cd5cac869c37350f6243fde70a671d30ab66f04de3f5d80abc97a3f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fff2fb3cd5cac869c37350f6243fde70a671d30ab66f04de3f5d80abc97a3f3->enter($__internal_0fff2fb3cd5cac869c37350f6243fde70a671d30ab66f04de3f5d80abc97a3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_165a00a556af4abf6b964a48a68cebe7d7110782f2677fc587ae973e94a204aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_165a00a556af4abf6b964a48a68cebe7d7110782f2677fc587ae973e94a204aa->enter($__internal_165a00a556af4abf6b964a48a68cebe7d7110782f2677fc587ae973e94a204aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_165a00a556af4abf6b964a48a68cebe7d7110782f2677fc587ae973e94a204aa->leave($__internal_165a00a556af4abf6b964a48a68cebe7d7110782f2677fc587ae973e94a204aa_prof);

        
        $__internal_0fff2fb3cd5cac869c37350f6243fde70a671d30ab66f04de3f5d80abc97a3f3->leave($__internal_0fff2fb3cd5cac869c37350f6243fde70a671d30ab66f04de3f5d80abc97a3f3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
