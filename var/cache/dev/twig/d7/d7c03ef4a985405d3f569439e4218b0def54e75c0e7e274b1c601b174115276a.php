<?php

/* @MAUser/Registration/register.html.twig */
class __TwigTemplate_21ff2a5b111b0df13c9c1a294c3b5b7c034dcf2c2314d5d1de9f5769152173a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@MAUser/Registration/register.html.twig", 1);
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
        $__internal_a5925ee79f240dd63e20789500251c7ae77bd922e79fa9fe6514cb3a6bb03e60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5925ee79f240dd63e20789500251c7ae77bd922e79fa9fe6514cb3a6bb03e60->enter($__internal_a5925ee79f240dd63e20789500251c7ae77bd922e79fa9fe6514cb3a6bb03e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Registration/register.html.twig"));

        $__internal_c1d0306eb1c5df52424b16600a6fd5c35f44112f772fb315a9a09043b645a0ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d0306eb1c5df52424b16600a6fd5c35f44112f772fb315a9a09043b645a0ad->enter($__internal_c1d0306eb1c5df52424b16600a6fd5c35f44112f772fb315a9a09043b645a0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5925ee79f240dd63e20789500251c7ae77bd922e79fa9fe6514cb3a6bb03e60->leave($__internal_a5925ee79f240dd63e20789500251c7ae77bd922e79fa9fe6514cb3a6bb03e60_prof);

        
        $__internal_c1d0306eb1c5df52424b16600a6fd5c35f44112f772fb315a9a09043b645a0ad->leave($__internal_c1d0306eb1c5df52424b16600a6fd5c35f44112f772fb315a9a09043b645a0ad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_16548bb67286bb5326149a39736e27f692821c8561aa453325f94bf14f93eecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16548bb67286bb5326149a39736e27f692821c8561aa453325f94bf14f93eecf->enter($__internal_16548bb67286bb5326149a39736e27f692821c8561aa453325f94bf14f93eecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3ea2a64e2f7061805cc85a4ec02a194e43bef61961c3e52a84fb55803dfae289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea2a64e2f7061805cc85a4ec02a194e43bef61961c3e52a84fb55803dfae289->enter($__internal_3ea2a64e2f7061805cc85a4ec02a194e43bef61961c3e52a84fb55803dfae289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@MAUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_3ea2a64e2f7061805cc85a4ec02a194e43bef61961c3e52a84fb55803dfae289->leave($__internal_3ea2a64e2f7061805cc85a4ec02a194e43bef61961c3e52a84fb55803dfae289_prof);

        
        $__internal_16548bb67286bb5326149a39736e27f692821c8561aa453325f94bf14f93eecf->leave($__internal_16548bb67286bb5326149a39736e27f692821c8561aa453325f94bf14f93eecf_prof);

    }

    public function getTemplateName()
    {
        return "@MAUser/Registration/register.html.twig";
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
    {% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}", "@MAUser/Registration/register.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
