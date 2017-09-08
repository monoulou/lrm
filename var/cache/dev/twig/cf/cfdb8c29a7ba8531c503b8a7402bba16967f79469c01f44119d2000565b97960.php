<?php

/* MAUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_e71b46e6ba830825032171ef76ef4857a0e0bb57dfb8e2d0b5018da178ad0289 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "MAUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_396574e58651d7ca9b6ff24a217ce71a8862bff0672fbee200c46e041ce9968f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_396574e58651d7ca9b6ff24a217ce71a8862bff0672fbee200c46e041ce9968f->enter($__internal_396574e58651d7ca9b6ff24a217ce71a8862bff0672fbee200c46e041ce9968f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:reset.html.twig"));

        $__internal_50d71e3fedb0cff6872f501e891f370ef5fb109734bce77b3278f5600c0b76c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d71e3fedb0cff6872f501e891f370ef5fb109734bce77b3278f5600c0b76c9->enter($__internal_50d71e3fedb0cff6872f501e891f370ef5fb109734bce77b3278f5600c0b76c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_396574e58651d7ca9b6ff24a217ce71a8862bff0672fbee200c46e041ce9968f->leave($__internal_396574e58651d7ca9b6ff24a217ce71a8862bff0672fbee200c46e041ce9968f_prof);

        
        $__internal_50d71e3fedb0cff6872f501e891f370ef5fb109734bce77b3278f5600c0b76c9->leave($__internal_50d71e3fedb0cff6872f501e891f370ef5fb109734bce77b3278f5600c0b76c9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b720bea40f957190deef097d0ce249eafd6322b864d6701e70fe85a31b48e25c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b720bea40f957190deef097d0ce249eafd6322b864d6701e70fe85a31b48e25c->enter($__internal_b720bea40f957190deef097d0ce249eafd6322b864d6701e70fe85a31b48e25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f92ef30b387ad23fee5fd832a93eac2a3123d4c8aece4f90a397503f3cefc205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92ef30b387ad23fee5fd832a93eac2a3123d4c8aece4f90a397503f3cefc205->enter($__internal_f92ef30b387ad23fee5fd832a93eac2a3123d4c8aece4f90a397503f3cefc205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "MAUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_f92ef30b387ad23fee5fd832a93eac2a3123d4c8aece4f90a397503f3cefc205->leave($__internal_f92ef30b387ad23fee5fd832a93eac2a3123d4c8aece4f90a397503f3cefc205_prof);

        
        $__internal_b720bea40f957190deef097d0ce249eafd6322b864d6701e70fe85a31b48e25c->leave($__internal_b720bea40f957190deef097d0ce249eafd6322b864d6701e70fe85a31b48e25c_prof);

    }

    public function getTemplateName()
    {
        return "MAUserBundle:Resetting:reset.html.twig";
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
    {% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}", "MAUserBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle/Resources/views/Resetting/reset.html.twig");
    }
}
