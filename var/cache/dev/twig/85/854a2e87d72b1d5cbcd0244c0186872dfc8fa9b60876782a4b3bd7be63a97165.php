<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_ed19a9db9a27c52d88c226e0d0baa8444c18c788c0b29d7272a7863f9bd312d0 extends Twig_Template
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
        $__internal_b24656c00c35fe7274a2ce1ade6f2ccbf0024a3331550239dc539f8588e97431 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b24656c00c35fe7274a2ce1ade6f2ccbf0024a3331550239dc539f8588e97431->enter($__internal_b24656c00c35fe7274a2ce1ade6f2ccbf0024a3331550239dc539f8588e97431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_595cb7c0ba98649a68b3ca6d427c518338692aea3a2203d1966a6f1a534d139c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_595cb7c0ba98649a68b3ca6d427c518338692aea3a2203d1966a6f1a534d139c->enter($__internal_595cb7c0ba98649a68b3ca6d427c518338692aea3a2203d1966a6f1a534d139c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_b24656c00c35fe7274a2ce1ade6f2ccbf0024a3331550239dc539f8588e97431->leave($__internal_b24656c00c35fe7274a2ce1ade6f2ccbf0024a3331550239dc539f8588e97431_prof);

        
        $__internal_595cb7c0ba98649a68b3ca6d427c518338692aea3a2203d1966a6f1a534d139c->leave($__internal_595cb7c0ba98649a68b3ca6d427c518338692aea3a2203d1966a6f1a534d139c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
