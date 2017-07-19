<?php

/* MAUserBundle:Security:login.html.twig */
class __TwigTemplate_4f46276a541efdf20b368e3ab3dca07bddd737a11593095285d9efddf38e9b7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "MAUserBundle:Security:login.html.twig", 2);
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
        $__internal_451025e89685688822c9bb71caa75ad65721d87f9ecb3425ec2b0565936ccc6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_451025e89685688822c9bb71caa75ad65721d87f9ecb3425ec2b0565936ccc6b->enter($__internal_451025e89685688822c9bb71caa75ad65721d87f9ecb3425ec2b0565936ccc6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Security:login.html.twig"));

        $__internal_19ec9ab27e22ec55bcf0fefdf777a224dda7cfc9b1c543d3b56e6f42ce76d750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ec9ab27e22ec55bcf0fefdf777a224dda7cfc9b1c543d3b56e6f42ce76d750->enter($__internal_19ec9ab27e22ec55bcf0fefdf777a224dda7cfc9b1c543d3b56e6f42ce76d750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_451025e89685688822c9bb71caa75ad65721d87f9ecb3425ec2b0565936ccc6b->leave($__internal_451025e89685688822c9bb71caa75ad65721d87f9ecb3425ec2b0565936ccc6b_prof);

        
        $__internal_19ec9ab27e22ec55bcf0fefdf777a224dda7cfc9b1c543d3b56e6f42ce76d750->leave($__internal_19ec9ab27e22ec55bcf0fefdf777a224dda7cfc9b1c543d3b56e6f42ce76d750_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0a4e4ec14d8d250c61fb922c6e5927c958edc03e2341416d122955834a31ec3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a4e4ec14d8d250c61fb922c6e5927c958edc03e2341416d122955834a31ec3f->enter($__internal_0a4e4ec14d8d250c61fb922c6e5927c958edc03e2341416d122955834a31ec3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_682dd24b90d840248a4bd2bf0dd09217e84b4345cadd8789c9a411a54af0da2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_682dd24b90d840248a4bd2bf0dd09217e84b4345cadd8789c9a411a54af0da2e->enter($__internal_682dd24b90d840248a4bd2bf0dd09217e84b4345cadd8789c9a411a54af0da2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_682dd24b90d840248a4bd2bf0dd09217e84b4345cadd8789c9a411a54af0da2e->leave($__internal_682dd24b90d840248a4bd2bf0dd09217e84b4345cadd8789c9a411a54af0da2e_prof);

        
        $__internal_0a4e4ec14d8d250c61fb922c6e5927c958edc03e2341416d122955834a31ec3f->leave($__internal_0a4e4ec14d8d250c61fb922c6e5927c958edc03e2341416d122955834a31ec3f_prof);

    }

    public function getTemplateName()
    {
        return "MAUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 2,);
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
{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}", "MAUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle/Resources/views/Security/login.html.twig");
    }
}
