<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_9d865cb9db3179548cc9350a0241d30efead5cba5fd1a73f9fd54492979f2768 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_022154cee9e75c3c2ce8c5c05fc8703587a84d4e07bad41ae974f3763232222f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_022154cee9e75c3c2ce8c5c05fc8703587a84d4e07bad41ae974f3763232222f->enter($__internal_022154cee9e75c3c2ce8c5c05fc8703587a84d4e07bad41ae974f3763232222f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_49e96794f14142a5b5fada6084c02a54ba93da3933a2be504e35f5c18905f4e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e96794f14142a5b5fada6084c02a54ba93da3933a2be504e35f5c18905f4e4->enter($__internal_49e96794f14142a5b5fada6084c02a54ba93da3933a2be504e35f5c18905f4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_022154cee9e75c3c2ce8c5c05fc8703587a84d4e07bad41ae974f3763232222f->leave($__internal_022154cee9e75c3c2ce8c5c05fc8703587a84d4e07bad41ae974f3763232222f_prof);

        
        $__internal_49e96794f14142a5b5fada6084c02a54ba93da3933a2be504e35f5c18905f4e4->leave($__internal_49e96794f14142a5b5fada6084c02a54ba93da3933a2be504e35f5c18905f4e4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ebac1cd9acbb3682179124896b99b39f97545d1000fede93ea362e76474d6772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebac1cd9acbb3682179124896b99b39f97545d1000fede93ea362e76474d6772->enter($__internal_ebac1cd9acbb3682179124896b99b39f97545d1000fede93ea362e76474d6772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_af6771a402475df354aa12851c62171f674ca3c8897fcf8e534e2a32374124f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af6771a402475df354aa12851c62171f674ca3c8897fcf8e534e2a32374124f6->enter($__internal_af6771a402475df354aa12851c62171f674ca3c8897fcf8e534e2a32374124f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_af6771a402475df354aa12851c62171f674ca3c8897fcf8e534e2a32374124f6->leave($__internal_af6771a402475df354aa12851c62171f674ca3c8897fcf8e534e2a32374124f6_prof);

        
        $__internal_ebac1cd9acbb3682179124896b99b39f97545d1000fede93ea362e76474d6772->leave($__internal_ebac1cd9acbb3682179124896b99b39f97545d1000fede93ea362e76474d6772_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
