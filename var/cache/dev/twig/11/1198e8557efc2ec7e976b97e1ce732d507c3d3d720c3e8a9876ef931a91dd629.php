<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_ed4522e1486dd2c4ff345f2c89ad0f3536db4e1460dbd513f6ac853d07d11341 extends Twig_Template
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
        $__internal_df65c9e8b7d5e5b73ba3d56f4511f95181dc1e586c7129bb05eac7482ea66913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df65c9e8b7d5e5b73ba3d56f4511f95181dc1e586c7129bb05eac7482ea66913->enter($__internal_df65c9e8b7d5e5b73ba3d56f4511f95181dc1e586c7129bb05eac7482ea66913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_f205b9209e5ff80548055c369fe42f418eebc8a2bbd1583d356628429333904b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f205b9209e5ff80548055c369fe42f418eebc8a2bbd1583d356628429333904b->enter($__internal_f205b9209e5ff80548055c369fe42f418eebc8a2bbd1583d356628429333904b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_df65c9e8b7d5e5b73ba3d56f4511f95181dc1e586c7129bb05eac7482ea66913->leave($__internal_df65c9e8b7d5e5b73ba3d56f4511f95181dc1e586c7129bb05eac7482ea66913_prof);

        
        $__internal_f205b9209e5ff80548055c369fe42f418eebc8a2bbd1583d356628429333904b->leave($__internal_f205b9209e5ff80548055c369fe42f418eebc8a2bbd1583d356628429333904b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
