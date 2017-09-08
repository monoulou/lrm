<?php

/* MAUserBundle:Profile:show.html.twig */
class __TwigTemplate_35406ecdd17df56796dfd7f79c6295c00ef0482363676eb2429350be7d5f11ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "MAUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1372004c11ab4e7465fb49c307c385c05ac7530b46ff2a8c92ace4d78308adf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1372004c11ab4e7465fb49c307c385c05ac7530b46ff2a8c92ace4d78308adf->enter($__internal_f1372004c11ab4e7465fb49c307c385c05ac7530b46ff2a8c92ace4d78308adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Profile:show.html.twig"));

        $__internal_8a27fd6f5b656f9fd0dca4d6a80d1dadb101f9a67dc997fae6adb2ca5518027a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a27fd6f5b656f9fd0dca4d6a80d1dadb101f9a67dc997fae6adb2ca5518027a->enter($__internal_8a27fd6f5b656f9fd0dca4d6a80d1dadb101f9a67dc997fae6adb2ca5518027a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1372004c11ab4e7465fb49c307c385c05ac7530b46ff2a8c92ace4d78308adf->leave($__internal_f1372004c11ab4e7465fb49c307c385c05ac7530b46ff2a8c92ace4d78308adf_prof);

        
        $__internal_8a27fd6f5b656f9fd0dca4d6a80d1dadb101f9a67dc997fae6adb2ca5518027a->leave($__internal_8a27fd6f5b656f9fd0dca4d6a80d1dadb101f9a67dc997fae6adb2ca5518027a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e0bf54bbbfbe19eb1c5bf979c75009c398d21e6b49a7ce4855be9a27923539e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e0bf54bbbfbe19eb1c5bf979c75009c398d21e6b49a7ce4855be9a27923539e->enter($__internal_8e0bf54bbbfbe19eb1c5bf979c75009c398d21e6b49a7ce4855be9a27923539e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6010122ea77de83c3ee15440219f4f1b1791bed71dd0032cf3673b076b539c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6010122ea77de83c3ee15440219f4f1b1791bed71dd0032cf3673b076b539c4d->enter($__internal_6010122ea77de83c3ee15440219f4f1b1791bed71dd0032cf3673b076b539c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "MAUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_6010122ea77de83c3ee15440219f4f1b1791bed71dd0032cf3673b076b539c4d->leave($__internal_6010122ea77de83c3ee15440219f4f1b1791bed71dd0032cf3673b076b539c4d_prof);

        
        $__internal_8e0bf54bbbfbe19eb1c5bf979c75009c398d21e6b49a7ce4855be9a27923539e->leave($__internal_8e0bf54bbbfbe19eb1c5bf979c75009c398d21e6b49a7ce4855be9a27923539e_prof);

    }

    public function getTemplateName()
    {
        return "MAUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}", "MAUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle/Resources/views/Profile/show.html.twig");
    }
}
