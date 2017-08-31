<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_3a32be90a6f7666b1efd5cf3aafabb96ce1b7a6281814908ae3f8424bcc9ad22 extends Twig_Template
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
        $__internal_4258aaa2327dd10a7b83a9115d30c4c30ea24071853fb8c3a999c6b931f2aa20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4258aaa2327dd10a7b83a9115d30c4c30ea24071853fb8c3a999c6b931f2aa20->enter($__internal_4258aaa2327dd10a7b83a9115d30c4c30ea24071853fb8c3a999c6b931f2aa20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_4a56bfadf9a7ab448e2c091806d8e08583c04b574343ebc1010e42c63a6494a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a56bfadf9a7ab448e2c091806d8e08583c04b574343ebc1010e42c63a6494a1->enter($__internal_4a56bfadf9a7ab448e2c091806d8e08583c04b574343ebc1010e42c63a6494a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_4258aaa2327dd10a7b83a9115d30c4c30ea24071853fb8c3a999c6b931f2aa20->leave($__internal_4258aaa2327dd10a7b83a9115d30c4c30ea24071853fb8c3a999c6b931f2aa20_prof);

        
        $__internal_4a56bfadf9a7ab448e2c091806d8e08583c04b574343ebc1010e42c63a6494a1->leave($__internal_4a56bfadf9a7ab448e2c091806d8e08583c04b574343ebc1010e42c63a6494a1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
