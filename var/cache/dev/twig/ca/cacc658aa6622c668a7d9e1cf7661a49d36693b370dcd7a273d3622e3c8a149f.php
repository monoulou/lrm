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
        $__internal_77caf87672187065e08573d8281eb7ee1dde017957c84ec22af3360c721bdae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77caf87672187065e08573d8281eb7ee1dde017957c84ec22af3360c721bdae2->enter($__internal_77caf87672187065e08573d8281eb7ee1dde017957c84ec22af3360c721bdae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Resetting/request.html.twig"));

        $__internal_a74ed5bd0a06f4689e149321ebe2f03c0c173b4872433693d648d0c08178e76d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74ed5bd0a06f4689e149321ebe2f03c0c173b4872433693d648d0c08178e76d->enter($__internal_a74ed5bd0a06f4689e149321ebe2f03c0c173b4872433693d648d0c08178e76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77caf87672187065e08573d8281eb7ee1dde017957c84ec22af3360c721bdae2->leave($__internal_77caf87672187065e08573d8281eb7ee1dde017957c84ec22af3360c721bdae2_prof);

        
        $__internal_a74ed5bd0a06f4689e149321ebe2f03c0c173b4872433693d648d0c08178e76d->leave($__internal_a74ed5bd0a06f4689e149321ebe2f03c0c173b4872433693d648d0c08178e76d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_305558616400430960d420037641ba33bedec837c69a72762612b44df00c4caa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_305558616400430960d420037641ba33bedec837c69a72762612b44df00c4caa->enter($__internal_305558616400430960d420037641ba33bedec837c69a72762612b44df00c4caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9a4b2f142df4b75625228e041aeb77a506f4d473df7044660cc9d2b4e267e917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a4b2f142df4b75625228e041aeb77a506f4d473df7044660cc9d2b4e267e917->enter($__internal_9a4b2f142df4b75625228e041aeb77a506f4d473df7044660cc9d2b4e267e917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@MAUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_9a4b2f142df4b75625228e041aeb77a506f4d473df7044660cc9d2b4e267e917->leave($__internal_9a4b2f142df4b75625228e041aeb77a506f4d473df7044660cc9d2b4e267e917_prof);

        
        $__internal_305558616400430960d420037641ba33bedec837c69a72762612b44df00c4caa->leave($__internal_305558616400430960d420037641ba33bedec837c69a72762612b44df00c4caa_prof);

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
