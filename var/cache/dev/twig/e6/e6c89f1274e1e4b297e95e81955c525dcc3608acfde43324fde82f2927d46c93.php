<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_db6b93687012918cd93b697164788daf1d3d5abbd7309e83c423244af1c82cff extends Twig_Template
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
        $__internal_330c316e1f7c3cc85490f4830521da92261b5d070ee28521ecdd08f664c32780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_330c316e1f7c3cc85490f4830521da92261b5d070ee28521ecdd08f664c32780->enter($__internal_330c316e1f7c3cc85490f4830521da92261b5d070ee28521ecdd08f664c32780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_a5413b8fa45f5271bd7d3d7db93eb6bb534f4312c857bcbf78ab1e9accca68f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5413b8fa45f5271bd7d3d7db93eb6bb534f4312c857bcbf78ab1e9accca68f4->enter($__internal_a5413b8fa45f5271bd7d3d7db93eb6bb534f4312c857bcbf78ab1e9accca68f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_330c316e1f7c3cc85490f4830521da92261b5d070ee28521ecdd08f664c32780->leave($__internal_330c316e1f7c3cc85490f4830521da92261b5d070ee28521ecdd08f664c32780_prof);

        
        $__internal_a5413b8fa45f5271bd7d3d7db93eb6bb534f4312c857bcbf78ab1e9accca68f4->leave($__internal_a5413b8fa45f5271bd7d3d7db93eb6bb534f4312c857bcbf78ab1e9accca68f4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
