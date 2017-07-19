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
        $__internal_f7e645481b559ede569606dc6bb8cf87cf11f2ef9f0bd4cd672013d45dcea86f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7e645481b559ede569606dc6bb8cf87cf11f2ef9f0bd4cd672013d45dcea86f->enter($__internal_f7e645481b559ede569606dc6bb8cf87cf11f2ef9f0bd4cd672013d45dcea86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_07e6cab5499d16232fa795b203aed13a263a7f8a74bcc49a44661b7dbc018c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07e6cab5499d16232fa795b203aed13a263a7f8a74bcc49a44661b7dbc018c6d->enter($__internal_07e6cab5499d16232fa795b203aed13a263a7f8a74bcc49a44661b7dbc018c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f7e645481b559ede569606dc6bb8cf87cf11f2ef9f0bd4cd672013d45dcea86f->leave($__internal_f7e645481b559ede569606dc6bb8cf87cf11f2ef9f0bd4cd672013d45dcea86f_prof);

        
        $__internal_07e6cab5499d16232fa795b203aed13a263a7f8a74bcc49a44661b7dbc018c6d->leave($__internal_07e6cab5499d16232fa795b203aed13a263a7f8a74bcc49a44661b7dbc018c6d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fef1fcb434cc5e5f14a320e5796de03209f39e55bb2e0f0f8cd9a886514a4ebd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fef1fcb434cc5e5f14a320e5796de03209f39e55bb2e0f0f8cd9a886514a4ebd->enter($__internal_fef1fcb434cc5e5f14a320e5796de03209f39e55bb2e0f0f8cd9a886514a4ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8b1fd34f946f4f600bd671b229bdbe51d07881d7efe53beb028ca2b3467e5356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b1fd34f946f4f600bd671b229bdbe51d07881d7efe53beb028ca2b3467e5356->enter($__internal_8b1fd34f946f4f600bd671b229bdbe51d07881d7efe53beb028ca2b3467e5356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8b1fd34f946f4f600bd671b229bdbe51d07881d7efe53beb028ca2b3467e5356->leave($__internal_8b1fd34f946f4f600bd671b229bdbe51d07881d7efe53beb028ca2b3467e5356_prof);

        
        $__internal_fef1fcb434cc5e5f14a320e5796de03209f39e55bb2e0f0f8cd9a886514a4ebd->leave($__internal_fef1fcb434cc5e5f14a320e5796de03209f39e55bb2e0f0f8cd9a886514a4ebd_prof);

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
