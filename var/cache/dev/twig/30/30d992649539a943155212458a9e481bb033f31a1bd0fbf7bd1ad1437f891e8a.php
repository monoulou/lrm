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
        $__internal_c395d05d50bc6cfcc731db57b05c506f491e2c72c022b837559958441b223232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c395d05d50bc6cfcc731db57b05c506f491e2c72c022b837559958441b223232->enter($__internal_c395d05d50bc6cfcc731db57b05c506f491e2c72c022b837559958441b223232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_6ca33c4224ca33d0bef13e44719eb0445d9400b490e4ddbca885371392257045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca33c4224ca33d0bef13e44719eb0445d9400b490e4ddbca885371392257045->enter($__internal_6ca33c4224ca33d0bef13e44719eb0445d9400b490e4ddbca885371392257045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c395d05d50bc6cfcc731db57b05c506f491e2c72c022b837559958441b223232->leave($__internal_c395d05d50bc6cfcc731db57b05c506f491e2c72c022b837559958441b223232_prof);

        
        $__internal_6ca33c4224ca33d0bef13e44719eb0445d9400b490e4ddbca885371392257045->leave($__internal_6ca33c4224ca33d0bef13e44719eb0445d9400b490e4ddbca885371392257045_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_12c827ba1460120bf26dbe68737842b3c965c4f60acd27dd3ab4a1e27eee2e6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12c827ba1460120bf26dbe68737842b3c965c4f60acd27dd3ab4a1e27eee2e6c->enter($__internal_12c827ba1460120bf26dbe68737842b3c965c4f60acd27dd3ab4a1e27eee2e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c5f218e59e2b36a780496f86e01b7263cc6402461d548f83bb934c2525b030ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f218e59e2b36a780496f86e01b7263cc6402461d548f83bb934c2525b030ee->enter($__internal_c5f218e59e2b36a780496f86e01b7263cc6402461d548f83bb934c2525b030ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c5f218e59e2b36a780496f86e01b7263cc6402461d548f83bb934c2525b030ee->leave($__internal_c5f218e59e2b36a780496f86e01b7263cc6402461d548f83bb934c2525b030ee_prof);

        
        $__internal_12c827ba1460120bf26dbe68737842b3c965c4f60acd27dd3ab4a1e27eee2e6c->leave($__internal_12c827ba1460120bf26dbe68737842b3c965c4f60acd27dd3ab4a1e27eee2e6c_prof);

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
