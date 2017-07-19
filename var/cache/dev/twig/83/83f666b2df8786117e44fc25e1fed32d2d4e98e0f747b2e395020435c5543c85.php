<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_78489aff4d81249a2e9741f399adc78295e9130f11884a738a1ed867e63b9fd7 extends Twig_Template
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
        $__internal_4ade72157e6d617ccdd6d9e79ad3eb427c62da30f00678a14b1b3b12b38ac8ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ade72157e6d617ccdd6d9e79ad3eb427c62da30f00678a14b1b3b12b38ac8ae->enter($__internal_4ade72157e6d617ccdd6d9e79ad3eb427c62da30f00678a14b1b3b12b38ac8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_70610174ecf753d440996abf147844046e30d0c812ce40fd2ec1bfc20b20f7a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70610174ecf753d440996abf147844046e30d0c812ce40fd2ec1bfc20b20f7a7->enter($__internal_70610174ecf753d440996abf147844046e30d0c812ce40fd2ec1bfc20b20f7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_4ade72157e6d617ccdd6d9e79ad3eb427c62da30f00678a14b1b3b12b38ac8ae->leave($__internal_4ade72157e6d617ccdd6d9e79ad3eb427c62da30f00678a14b1b3b12b38ac8ae_prof);

        
        $__internal_70610174ecf753d440996abf147844046e30d0c812ce40fd2ec1bfc20b20f7a7->leave($__internal_70610174ecf753d440996abf147844046e30d0c812ce40fd2ec1bfc20b20f7a7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
