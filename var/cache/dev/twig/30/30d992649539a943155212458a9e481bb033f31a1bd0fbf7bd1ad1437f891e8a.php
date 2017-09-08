<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_70647ce63b5190144c2e8845b3c9655625d0224381c92b35466794b5cbd10728 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ca9aed7ad7ca532592632115305dc29e39bc3516bccfe42416a773057de8b14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ca9aed7ad7ca532592632115305dc29e39bc3516bccfe42416a773057de8b14->enter($__internal_6ca9aed7ad7ca532592632115305dc29e39bc3516bccfe42416a773057de8b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_eafbe6fe1a4dc49cb7647ed3a46d7357a58275454b7c70e0d8ec39dd3e363bcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eafbe6fe1a4dc49cb7647ed3a46d7357a58275454b7c70e0d8ec39dd3e363bcc->enter($__internal_eafbe6fe1a4dc49cb7647ed3a46d7357a58275454b7c70e0d8ec39dd3e363bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6ca9aed7ad7ca532592632115305dc29e39bc3516bccfe42416a773057de8b14->leave($__internal_6ca9aed7ad7ca532592632115305dc29e39bc3516bccfe42416a773057de8b14_prof);

        
        $__internal_eafbe6fe1a4dc49cb7647ed3a46d7357a58275454b7c70e0d8ec39dd3e363bcc->leave($__internal_eafbe6fe1a4dc49cb7647ed3a46d7357a58275454b7c70e0d8ec39dd3e363bcc_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_007765dbb38137742ad9ae293231aefe2fc5dcd3b854ad999ba031b4cd7bef60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_007765dbb38137742ad9ae293231aefe2fc5dcd3b854ad999ba031b4cd7bef60->enter($__internal_007765dbb38137742ad9ae293231aefe2fc5dcd3b854ad999ba031b4cd7bef60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b0d8406e0b62ffbf2d30de7a69d3e1e0dd86c32107cfd4967bb878075412a8f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d8406e0b62ffbf2d30de7a69d3e1e0dd86c32107cfd4967bb878075412a8f6->enter($__internal_b0d8406e0b62ffbf2d30de7a69d3e1e0dd86c32107cfd4967bb878075412a8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b0d8406e0b62ffbf2d30de7a69d3e1e0dd86c32107cfd4967bb878075412a8f6->leave($__internal_b0d8406e0b62ffbf2d30de7a69d3e1e0dd86c32107cfd4967bb878075412a8f6_prof);

        
        $__internal_007765dbb38137742ad9ae293231aefe2fc5dcd3b854ad999ba031b4cd7bef60->leave($__internal_007765dbb38137742ad9ae293231aefe2fc5dcd3b854ad999ba031b4cd7bef60_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
