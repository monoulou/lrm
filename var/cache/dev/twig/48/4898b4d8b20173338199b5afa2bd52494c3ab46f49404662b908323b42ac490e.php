<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_26693739b2c38f3b2e59d82887d47ec51421e0d3079600ea8417714b37c5321f extends Twig_Template
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
        $__internal_e9fcce945f2dab8ded01772e94e6826ffb1a68256ae756e983b43b91ec119c40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9fcce945f2dab8ded01772e94e6826ffb1a68256ae756e983b43b91ec119c40->enter($__internal_e9fcce945f2dab8ded01772e94e6826ffb1a68256ae756e983b43b91ec119c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_755dcdc7181b59fb0e703e288066168d8945f4c3589a08376b257b2ff6d77d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_755dcdc7181b59fb0e703e288066168d8945f4c3589a08376b257b2ff6d77d80->enter($__internal_755dcdc7181b59fb0e703e288066168d8945f4c3589a08376b257b2ff6d77d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e9fcce945f2dab8ded01772e94e6826ffb1a68256ae756e983b43b91ec119c40->leave($__internal_e9fcce945f2dab8ded01772e94e6826ffb1a68256ae756e983b43b91ec119c40_prof);

        
        $__internal_755dcdc7181b59fb0e703e288066168d8945f4c3589a08376b257b2ff6d77d80->leave($__internal_755dcdc7181b59fb0e703e288066168d8945f4c3589a08376b257b2ff6d77d80_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
