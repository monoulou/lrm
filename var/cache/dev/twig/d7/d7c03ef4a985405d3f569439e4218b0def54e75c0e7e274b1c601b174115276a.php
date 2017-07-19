<?php

/* @MAUser/Registration/register.html.twig */
class __TwigTemplate_21ff2a5b111b0df13c9c1a294c3b5b7c034dcf2c2314d5d1de9f5769152173a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@MAUser/Registration/register.html.twig", 1);
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
        $__internal_4a444ef0df54e9ba4885c8130de04426d3fd57061eb2d6f0c6404f46d08ddaec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a444ef0df54e9ba4885c8130de04426d3fd57061eb2d6f0c6404f46d08ddaec->enter($__internal_4a444ef0df54e9ba4885c8130de04426d3fd57061eb2d6f0c6404f46d08ddaec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Registration/register.html.twig"));

        $__internal_10c20df43cc064ee160b046158c9480ec97b34a2186e197ff26fba015d7dc73d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10c20df43cc064ee160b046158c9480ec97b34a2186e197ff26fba015d7dc73d->enter($__internal_10c20df43cc064ee160b046158c9480ec97b34a2186e197ff26fba015d7dc73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a444ef0df54e9ba4885c8130de04426d3fd57061eb2d6f0c6404f46d08ddaec->leave($__internal_4a444ef0df54e9ba4885c8130de04426d3fd57061eb2d6f0c6404f46d08ddaec_prof);

        
        $__internal_10c20df43cc064ee160b046158c9480ec97b34a2186e197ff26fba015d7dc73d->leave($__internal_10c20df43cc064ee160b046158c9480ec97b34a2186e197ff26fba015d7dc73d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c63e693bd482db1a58f8942158bce39d912b5dfb27a8f532a08df1173b08b89f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c63e693bd482db1a58f8942158bce39d912b5dfb27a8f532a08df1173b08b89f->enter($__internal_c63e693bd482db1a58f8942158bce39d912b5dfb27a8f532a08df1173b08b89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2c4872e1d63f579fd7c06cbabb5d5d30188fddfea0326381e5734d75b84fd739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c4872e1d63f579fd7c06cbabb5d5d30188fddfea0326381e5734d75b84fd739->enter($__internal_2c4872e1d63f579fd7c06cbabb5d5d30188fddfea0326381e5734d75b84fd739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@MAUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_2c4872e1d63f579fd7c06cbabb5d5d30188fddfea0326381e5734d75b84fd739->leave($__internal_2c4872e1d63f579fd7c06cbabb5d5d30188fddfea0326381e5734d75b84fd739_prof);

        
        $__internal_c63e693bd482db1a58f8942158bce39d912b5dfb27a8f532a08df1173b08b89f->leave($__internal_c63e693bd482db1a58f8942158bce39d912b5dfb27a8f532a08df1173b08b89f_prof);

    }

    public function getTemplateName()
    {
        return "@MAUser/Registration/register.html.twig";
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
    {% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}", "@MAUser/Registration/register.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
