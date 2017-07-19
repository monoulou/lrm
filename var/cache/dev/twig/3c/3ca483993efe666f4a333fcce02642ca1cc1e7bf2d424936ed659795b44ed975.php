<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_d90065b0ba6e5ceb8860a785a5b34426f3c3a27c9f5ca594890eb7b2be0c8b1b extends Twig_Template
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
        $__internal_00cfaf076bcdd53891fba73fa54963ef4dc62418cdf55664ca72b4b41ff933e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00cfaf076bcdd53891fba73fa54963ef4dc62418cdf55664ca72b4b41ff933e6->enter($__internal_00cfaf076bcdd53891fba73fa54963ef4dc62418cdf55664ca72b4b41ff933e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_5eba5a85caea516495d0ce909c838a531f3c5bc3493f58726c6ed97f458fc3b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eba5a85caea516495d0ce909c838a531f3c5bc3493f58726c6ed97f458fc3b8->enter($__internal_5eba5a85caea516495d0ce909c838a531f3c5bc3493f58726c6ed97f458fc3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_00cfaf076bcdd53891fba73fa54963ef4dc62418cdf55664ca72b4b41ff933e6->leave($__internal_00cfaf076bcdd53891fba73fa54963ef4dc62418cdf55664ca72b4b41ff933e6_prof);

        
        $__internal_5eba5a85caea516495d0ce909c838a531f3c5bc3493f58726c6ed97f458fc3b8->leave($__internal_5eba5a85caea516495d0ce909c838a531f3c5bc3493f58726c6ed97f458fc3b8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
