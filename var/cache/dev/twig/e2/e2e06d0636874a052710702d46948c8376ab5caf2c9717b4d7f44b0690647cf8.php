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
        $__internal_4fea25da285b0894f0416fa1b9c5d36c3c2d8654173543cc39de8761b599aa9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fea25da285b0894f0416fa1b9c5d36c3c2d8654173543cc39de8761b599aa9c->enter($__internal_4fea25da285b0894f0416fa1b9c5d36c3c2d8654173543cc39de8761b599aa9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_cc0f6cd1a4bc31404021f268eec648f7568721fa0634593c755a4ef5ada10e99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc0f6cd1a4bc31404021f268eec648f7568721fa0634593c755a4ef5ada10e99->enter($__internal_cc0f6cd1a4bc31404021f268eec648f7568721fa0634593c755a4ef5ada10e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_4fea25da285b0894f0416fa1b9c5d36c3c2d8654173543cc39de8761b599aa9c->leave($__internal_4fea25da285b0894f0416fa1b9c5d36c3c2d8654173543cc39de8761b599aa9c_prof);

        
        $__internal_cc0f6cd1a4bc31404021f268eec648f7568721fa0634593c755a4ef5ada10e99->leave($__internal_cc0f6cd1a4bc31404021f268eec648f7568721fa0634593c755a4ef5ada10e99_prof);

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
