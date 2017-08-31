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
        $__internal_1e5cf6c03be4839f1d784d68482e873e880c5981f407d44a745362482d4fa3ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e5cf6c03be4839f1d784d68482e873e880c5981f407d44a745362482d4fa3ea->enter($__internal_1e5cf6c03be4839f1d784d68482e873e880c5981f407d44a745362482d4fa3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_7f31478e1db21f472cd66617973817abb77d725765be430929c237b97b88a762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f31478e1db21f472cd66617973817abb77d725765be430929c237b97b88a762->enter($__internal_7f31478e1db21f472cd66617973817abb77d725765be430929c237b97b88a762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1e5cf6c03be4839f1d784d68482e873e880c5981f407d44a745362482d4fa3ea->leave($__internal_1e5cf6c03be4839f1d784d68482e873e880c5981f407d44a745362482d4fa3ea_prof);

        
        $__internal_7f31478e1db21f472cd66617973817abb77d725765be430929c237b97b88a762->leave($__internal_7f31478e1db21f472cd66617973817abb77d725765be430929c237b97b88a762_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8eba621c5250d64f923d0aea5db99a90992fcaa66630e9efffbfc486be00d786 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eba621c5250d64f923d0aea5db99a90992fcaa66630e9efffbfc486be00d786->enter($__internal_8eba621c5250d64f923d0aea5db99a90992fcaa66630e9efffbfc486be00d786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cfdbbd6da4789dfee2f159a96c2b3d03a431353f95117c31eff2d87e3e4b7cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfdbbd6da4789dfee2f159a96c2b3d03a431353f95117c31eff2d87e3e4b7cbf->enter($__internal_cfdbbd6da4789dfee2f159a96c2b3d03a431353f95117c31eff2d87e3e4b7cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cfdbbd6da4789dfee2f159a96c2b3d03a431353f95117c31eff2d87e3e4b7cbf->leave($__internal_cfdbbd6da4789dfee2f159a96c2b3d03a431353f95117c31eff2d87e3e4b7cbf_prof);

        
        $__internal_8eba621c5250d64f923d0aea5db99a90992fcaa66630e9efffbfc486be00d786->leave($__internal_8eba621c5250d64f923d0aea5db99a90992fcaa66630e9efffbfc486be00d786_prof);

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
