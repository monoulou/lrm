<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_6401da66b0a171a3e5f8a99aeb1524f7695f477071e438c487a6260f2123576f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_54ff4e3673713d61c3b02e648dd610a8e7082269348ab1a62b053bd61d770027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54ff4e3673713d61c3b02e648dd610a8e7082269348ab1a62b053bd61d770027->enter($__internal_54ff4e3673713d61c3b02e648dd610a8e7082269348ab1a62b053bd61d770027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_ea91ae1fb0def543bc88e099f289ebad1da044ff5a21db99089b0e5c99c11745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea91ae1fb0def543bc88e099f289ebad1da044ff5a21db99089b0e5c99c11745->enter($__internal_ea91ae1fb0def543bc88e099f289ebad1da044ff5a21db99089b0e5c99c11745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54ff4e3673713d61c3b02e648dd610a8e7082269348ab1a62b053bd61d770027->leave($__internal_54ff4e3673713d61c3b02e648dd610a8e7082269348ab1a62b053bd61d770027_prof);

        
        $__internal_ea91ae1fb0def543bc88e099f289ebad1da044ff5a21db99089b0e5c99c11745->leave($__internal_ea91ae1fb0def543bc88e099f289ebad1da044ff5a21db99089b0e5c99c11745_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a23a47de6d39ff3e6f8888511782ae129aa304701470722b46c3c515ecce1088 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a23a47de6d39ff3e6f8888511782ae129aa304701470722b46c3c515ecce1088->enter($__internal_a23a47de6d39ff3e6f8888511782ae129aa304701470722b46c3c515ecce1088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4c3891addea006f37b586720c67948ec4b0325ca5467b63783c45bfdd69f6503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c3891addea006f37b586720c67948ec4b0325ca5467b63783c45bfdd69f6503->enter($__internal_4c3891addea006f37b586720c67948ec4b0325ca5467b63783c45bfdd69f6503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4c3891addea006f37b586720c67948ec4b0325ca5467b63783c45bfdd69f6503->leave($__internal_4c3891addea006f37b586720c67948ec4b0325ca5467b63783c45bfdd69f6503_prof);

        
        $__internal_a23a47de6d39ff3e6f8888511782ae129aa304701470722b46c3c515ecce1088->leave($__internal_a23a47de6d39ff3e6f8888511782ae129aa304701470722b46c3c515ecce1088_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
