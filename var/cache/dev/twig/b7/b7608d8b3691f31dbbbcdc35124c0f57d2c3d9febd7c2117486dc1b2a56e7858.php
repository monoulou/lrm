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
        $__internal_7d410be72eabdee3a616f814fa683a04966ff0b13ffd3409730a5db035565471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d410be72eabdee3a616f814fa683a04966ff0b13ffd3409730a5db035565471->enter($__internal_7d410be72eabdee3a616f814fa683a04966ff0b13ffd3409730a5db035565471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_fa3a526384c8241fe93b625cf58365abfbaf4e4a626f905aab8d7cdc71b27fd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa3a526384c8241fe93b625cf58365abfbaf4e4a626f905aab8d7cdc71b27fd4->enter($__internal_fa3a526384c8241fe93b625cf58365abfbaf4e4a626f905aab8d7cdc71b27fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_7d410be72eabdee3a616f814fa683a04966ff0b13ffd3409730a5db035565471->leave($__internal_7d410be72eabdee3a616f814fa683a04966ff0b13ffd3409730a5db035565471_prof);

        
        $__internal_fa3a526384c8241fe93b625cf58365abfbaf4e4a626f905aab8d7cdc71b27fd4->leave($__internal_fa3a526384c8241fe93b625cf58365abfbaf4e4a626f905aab8d7cdc71b27fd4_prof);

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
