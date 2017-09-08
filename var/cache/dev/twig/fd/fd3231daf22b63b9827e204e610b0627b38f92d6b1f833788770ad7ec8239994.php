<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_79020d7d1e854160506f2a846a4725606d9f39a85a6763a81d8b1cd3fc79a402 extends Twig_Template
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
        $__internal_5451d7b991c9307703a97ebd524bed21c0cb80d461ff9fecbed569bdd6e2e876 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5451d7b991c9307703a97ebd524bed21c0cb80d461ff9fecbed569bdd6e2e876->enter($__internal_5451d7b991c9307703a97ebd524bed21c0cb80d461ff9fecbed569bdd6e2e876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_acc086dfea33851f7952f89e80342fd1a414a5b4d7cfeb52bfe1883e99caf6e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc086dfea33851f7952f89e80342fd1a414a5b4d7cfeb52bfe1883e99caf6e2->enter($__internal_acc086dfea33851f7952f89e80342fd1a414a5b4d7cfeb52bfe1883e99caf6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5451d7b991c9307703a97ebd524bed21c0cb80d461ff9fecbed569bdd6e2e876->leave($__internal_5451d7b991c9307703a97ebd524bed21c0cb80d461ff9fecbed569bdd6e2e876_prof);

        
        $__internal_acc086dfea33851f7952f89e80342fd1a414a5b4d7cfeb52bfe1883e99caf6e2->leave($__internal_acc086dfea33851f7952f89e80342fd1a414a5b4d7cfeb52bfe1883e99caf6e2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
