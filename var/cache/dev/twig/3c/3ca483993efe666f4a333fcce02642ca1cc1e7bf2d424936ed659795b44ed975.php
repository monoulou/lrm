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
        $__internal_7f02e56fb2bbeb889b79b0d0b2a0a2302f9d0f2ed7fc8e948515c9d64e3b6e06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f02e56fb2bbeb889b79b0d0b2a0a2302f9d0f2ed7fc8e948515c9d64e3b6e06->enter($__internal_7f02e56fb2bbeb889b79b0d0b2a0a2302f9d0f2ed7fc8e948515c9d64e3b6e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_3d667eed4f85486e943f66d3c5d95e8fed9c60bc6cef44c1ad9bfb9b73f1c5b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d667eed4f85486e943f66d3c5d95e8fed9c60bc6cef44c1ad9bfb9b73f1c5b5->enter($__internal_3d667eed4f85486e943f66d3c5d95e8fed9c60bc6cef44c1ad9bfb9b73f1c5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_7f02e56fb2bbeb889b79b0d0b2a0a2302f9d0f2ed7fc8e948515c9d64e3b6e06->leave($__internal_7f02e56fb2bbeb889b79b0d0b2a0a2302f9d0f2ed7fc8e948515c9d64e3b6e06_prof);

        
        $__internal_3d667eed4f85486e943f66d3c5d95e8fed9c60bc6cef44c1ad9bfb9b73f1c5b5->leave($__internal_3d667eed4f85486e943f66d3c5d95e8fed9c60bc6cef44c1ad9bfb9b73f1c5b5_prof);

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
