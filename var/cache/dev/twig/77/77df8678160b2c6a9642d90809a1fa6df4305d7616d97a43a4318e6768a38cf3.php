<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_9d10b9bf103060f35f5a4f401d0ce82e2050226594cdadbe3f0d4d26dd0bdf8f extends Twig_Template
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
        $__internal_1f9b88959debe187e6cf0a8a7fd13ab18d78f57039e0f68d6ba08953346726a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f9b88959debe187e6cf0a8a7fd13ab18d78f57039e0f68d6ba08953346726a4->enter($__internal_1f9b88959debe187e6cf0a8a7fd13ab18d78f57039e0f68d6ba08953346726a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_7d27687adb51d87356e1f83164a573c220851ef5f02a451078e93b5c1e7fb9d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d27687adb51d87356e1f83164a573c220851ef5f02a451078e93b5c1e7fb9d2->enter($__internal_7d27687adb51d87356e1f83164a573c220851ef5f02a451078e93b5c1e7fb9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1f9b88959debe187e6cf0a8a7fd13ab18d78f57039e0f68d6ba08953346726a4->leave($__internal_1f9b88959debe187e6cf0a8a7fd13ab18d78f57039e0f68d6ba08953346726a4_prof);

        
        $__internal_7d27687adb51d87356e1f83164a573c220851ef5f02a451078e93b5c1e7fb9d2->leave($__internal_7d27687adb51d87356e1f83164a573c220851ef5f02a451078e93b5c1e7fb9d2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cbcb0b40a5dde9b87bbbef7d61ea4418a000d680d9c707471b0c31baeccd2414 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbcb0b40a5dde9b87bbbef7d61ea4418a000d680d9c707471b0c31baeccd2414->enter($__internal_cbcb0b40a5dde9b87bbbef7d61ea4418a000d680d9c707471b0c31baeccd2414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cb2b191456465cd8a62c5f21ec462b5503a4bda37e8ac3cd4400b5fd2a313786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb2b191456465cd8a62c5f21ec462b5503a4bda37e8ac3cd4400b5fd2a313786->enter($__internal_cb2b191456465cd8a62c5f21ec462b5503a4bda37e8ac3cd4400b5fd2a313786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cb2b191456465cd8a62c5f21ec462b5503a4bda37e8ac3cd4400b5fd2a313786->leave($__internal_cb2b191456465cd8a62c5f21ec462b5503a4bda37e8ac3cd4400b5fd2a313786_prof);

        
        $__internal_cbcb0b40a5dde9b87bbbef7d61ea4418a000d680d9c707471b0c31baeccd2414->leave($__internal_cbcb0b40a5dde9b87bbbef7d61ea4418a000d680d9c707471b0c31baeccd2414_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
