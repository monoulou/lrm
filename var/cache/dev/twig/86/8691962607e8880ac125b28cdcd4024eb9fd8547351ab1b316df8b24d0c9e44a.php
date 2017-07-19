<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_9e46cf80040daeb0ac6045768b427004340e81ac1b396e0a2fc2b806c520a963 extends Twig_Template
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
        $__internal_c2c743d34e4a88cb1a7a2cd766e2e509fd11cb2e91508f9f380165abbd8fe692 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2c743d34e4a88cb1a7a2cd766e2e509fd11cb2e91508f9f380165abbd8fe692->enter($__internal_c2c743d34e4a88cb1a7a2cd766e2e509fd11cb2e91508f9f380165abbd8fe692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_61582c5477a7137fce62e8fb7e5b64d9b8a7a2118ab2c7f7739171620a4eead2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61582c5477a7137fce62e8fb7e5b64d9b8a7a2118ab2c7f7739171620a4eead2->enter($__internal_61582c5477a7137fce62e8fb7e5b64d9b8a7a2118ab2c7f7739171620a4eead2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_c2c743d34e4a88cb1a7a2cd766e2e509fd11cb2e91508f9f380165abbd8fe692->leave($__internal_c2c743d34e4a88cb1a7a2cd766e2e509fd11cb2e91508f9f380165abbd8fe692_prof);

        
        $__internal_61582c5477a7137fce62e8fb7e5b64d9b8a7a2118ab2c7f7739171620a4eead2->leave($__internal_61582c5477a7137fce62e8fb7e5b64d9b8a7a2118ab2c7f7739171620a4eead2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
", "FOSUserBundle:Group:show_content.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
