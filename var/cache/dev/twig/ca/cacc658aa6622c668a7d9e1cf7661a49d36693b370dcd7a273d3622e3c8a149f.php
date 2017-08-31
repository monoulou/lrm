<?php

/* @MAUser/Resetting/request.html.twig */
class __TwigTemplate_a24fefbeee48f094e41733b0012b51fa36da7425dc1b4fef153fa5e572744011 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@MAUser/Resetting/request.html.twig", 1);
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
        $__internal_a07d37939165cf4493ec0cd224faa3d46128ecf760fe7a354919f07723185438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a07d37939165cf4493ec0cd224faa3d46128ecf760fe7a354919f07723185438->enter($__internal_a07d37939165cf4493ec0cd224faa3d46128ecf760fe7a354919f07723185438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Resetting/request.html.twig"));

        $__internal_79d40c625894e4d4a9a9fad63d3a822e30c66698793bd436e22ead2f8f5d0d47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d40c625894e4d4a9a9fad63d3a822e30c66698793bd436e22ead2f8f5d0d47->enter($__internal_79d40c625894e4d4a9a9fad63d3a822e30c66698793bd436e22ead2f8f5d0d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a07d37939165cf4493ec0cd224faa3d46128ecf760fe7a354919f07723185438->leave($__internal_a07d37939165cf4493ec0cd224faa3d46128ecf760fe7a354919f07723185438_prof);

        
        $__internal_79d40c625894e4d4a9a9fad63d3a822e30c66698793bd436e22ead2f8f5d0d47->leave($__internal_79d40c625894e4d4a9a9fad63d3a822e30c66698793bd436e22ead2f8f5d0d47_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_254771fb09528475174060feabbb08636fdec2dfd1208a4543e0f297a4e6a657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_254771fb09528475174060feabbb08636fdec2dfd1208a4543e0f297a4e6a657->enter($__internal_254771fb09528475174060feabbb08636fdec2dfd1208a4543e0f297a4e6a657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d19c83e0b3790b9ed97da2d247d8f0fca129b6d23ca1162332d38c796af58ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19c83e0b3790b9ed97da2d247d8f0fca129b6d23ca1162332d38c796af58ce4->enter($__internal_d19c83e0b3790b9ed97da2d247d8f0fca129b6d23ca1162332d38c796af58ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@MAUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_d19c83e0b3790b9ed97da2d247d8f0fca129b6d23ca1162332d38c796af58ce4->leave($__internal_d19c83e0b3790b9ed97da2d247d8f0fca129b6d23ca1162332d38c796af58ce4_prof);

        
        $__internal_254771fb09528475174060feabbb08636fdec2dfd1208a4543e0f297a4e6a657->leave($__internal_254771fb09528475174060feabbb08636fdec2dfd1208a4543e0f297a4e6a657_prof);

    }

    public function getTemplateName()
    {
        return "@MAUser/Resetting/request.html.twig";
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
{% endblock fos_user_content %}", "@MAUser/Resetting/request.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
