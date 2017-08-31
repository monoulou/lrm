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
        $__internal_fd3b5f16d62b71e96037d7ecfab646f982a91058d2b6e7999683d3e9c82f1ca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd3b5f16d62b71e96037d7ecfab646f982a91058d2b6e7999683d3e9c82f1ca4->enter($__internal_fd3b5f16d62b71e96037d7ecfab646f982a91058d2b6e7999683d3e9c82f1ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_c99d4bfde5dde2376532321c9dd6b3d299e12d85536b57f580ab07d8920c95e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c99d4bfde5dde2376532321c9dd6b3d299e12d85536b57f580ab07d8920c95e2->enter($__internal_c99d4bfde5dde2376532321c9dd6b3d299e12d85536b57f580ab07d8920c95e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_fd3b5f16d62b71e96037d7ecfab646f982a91058d2b6e7999683d3e9c82f1ca4->leave($__internal_fd3b5f16d62b71e96037d7ecfab646f982a91058d2b6e7999683d3e9c82f1ca4_prof);

        
        $__internal_c99d4bfde5dde2376532321c9dd6b3d299e12d85536b57f580ab07d8920c95e2->leave($__internal_c99d4bfde5dde2376532321c9dd6b3d299e12d85536b57f580ab07d8920c95e2_prof);

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
