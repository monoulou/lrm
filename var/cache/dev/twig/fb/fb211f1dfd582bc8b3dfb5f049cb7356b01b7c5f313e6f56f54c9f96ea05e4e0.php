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
        $__internal_5335871d66a81bba7a5ca57f6ce66d34e222f020f5268c6556c27fa9fbf24e67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5335871d66a81bba7a5ca57f6ce66d34e222f020f5268c6556c27fa9fbf24e67->enter($__internal_5335871d66a81bba7a5ca57f6ce66d34e222f020f5268c6556c27fa9fbf24e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_fcffc5acd3dbfcf03ffd5883d613cf7a59f431e94daa7ebb11113dbaad966d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcffc5acd3dbfcf03ffd5883d613cf7a59f431e94daa7ebb11113dbaad966d86->enter($__internal_fcffc5acd3dbfcf03ffd5883d613cf7a59f431e94daa7ebb11113dbaad966d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_5335871d66a81bba7a5ca57f6ce66d34e222f020f5268c6556c27fa9fbf24e67->leave($__internal_5335871d66a81bba7a5ca57f6ce66d34e222f020f5268c6556c27fa9fbf24e67_prof);

        
        $__internal_fcffc5acd3dbfcf03ffd5883d613cf7a59f431e94daa7ebb11113dbaad966d86->leave($__internal_fcffc5acd3dbfcf03ffd5883d613cf7a59f431e94daa7ebb11113dbaad966d86_prof);

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
