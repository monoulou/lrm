<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_92a466a7729d50055c739774e190f5d7ed2cc82e16232e2d06d0fe5ba2d729fa extends Twig_Template
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
        $__internal_6625a6b38b7de722e9e327f549d0b5978c78888ee9c8d3727bb414a0c54979eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6625a6b38b7de722e9e327f549d0b5978c78888ee9c8d3727bb414a0c54979eb->enter($__internal_6625a6b38b7de722e9e327f549d0b5978c78888ee9c8d3727bb414a0c54979eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_cd1361f689693c0b588a10698c00c1385709be90d7294ad3608caef22255726f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1361f689693c0b588a10698c00c1385709be90d7294ad3608caef22255726f->enter($__internal_cd1361f689693c0b588a10698c00c1385709be90d7294ad3608caef22255726f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_6625a6b38b7de722e9e327f549d0b5978c78888ee9c8d3727bb414a0c54979eb->leave($__internal_6625a6b38b7de722e9e327f549d0b5978c78888ee9c8d3727bb414a0c54979eb_prof);

        
        $__internal_cd1361f689693c0b588a10698c00c1385709be90d7294ad3608caef22255726f->leave($__internal_cd1361f689693c0b588a10698c00c1385709be90d7294ad3608caef22255726f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "@FOSUser/Group/show_content.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show_content.html.twig");
    }
}
