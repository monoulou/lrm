<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_5ca9ab1ab93f01d006ffdc8b5175ecfefb9485a954d11440e5bfd82c2b0d2ef2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b4025316776828266eb904e099fc6988c649b07917c9308b72e27e33e54742e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b4025316776828266eb904e099fc6988c649b07917c9308b72e27e33e54742e->enter($__internal_9b4025316776828266eb904e099fc6988c649b07917c9308b72e27e33e54742e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_258212494de17598753f598706b7398911d42436a85c7ad046a57540ea290577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_258212494de17598753f598706b7398911d42436a85c7ad046a57540ea290577->enter($__internal_258212494de17598753f598706b7398911d42436a85c7ad046a57540ea290577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_9b4025316776828266eb904e099fc6988c649b07917c9308b72e27e33e54742e->leave($__internal_9b4025316776828266eb904e099fc6988c649b07917c9308b72e27e33e54742e_prof);

        
        $__internal_258212494de17598753f598706b7398911d42436a85c7ad046a57540ea290577->leave($__internal_258212494de17598753f598706b7398911d42436a85c7ad046a57540ea290577_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
