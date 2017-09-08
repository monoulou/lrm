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
        $__internal_abbcefc155f558b8fa043c5be288a8cb235d65f899ba502dd08c5d09ec93880c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abbcefc155f558b8fa043c5be288a8cb235d65f899ba502dd08c5d09ec93880c->enter($__internal_abbcefc155f558b8fa043c5be288a8cb235d65f899ba502dd08c5d09ec93880c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_d8b80ae215dc36bef3a87ad7c110b4ac08aea8b709d749f9b0bf0ee1f33f71ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b80ae215dc36bef3a87ad7c110b4ac08aea8b709d749f9b0bf0ee1f33f71ef->enter($__internal_d8b80ae215dc36bef3a87ad7c110b4ac08aea8b709d749f9b0bf0ee1f33f71ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_abbcefc155f558b8fa043c5be288a8cb235d65f899ba502dd08c5d09ec93880c->leave($__internal_abbcefc155f558b8fa043c5be288a8cb235d65f899ba502dd08c5d09ec93880c_prof);

        
        $__internal_d8b80ae215dc36bef3a87ad7c110b4ac08aea8b709d749f9b0bf0ee1f33f71ef->leave($__internal_d8b80ae215dc36bef3a87ad7c110b4ac08aea8b709d749f9b0bf0ee1f33f71ef_prof);

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
