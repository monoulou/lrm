<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_13fe1726cf9788d239f24e1762fa2b2d5c55c39edeaa04ed480d6328a17b1de9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_c29b2af9769c6e50d57c8c1a317bd0dd39c3fa18bc1f4b609f455f46719c6d1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c29b2af9769c6e50d57c8c1a317bd0dd39c3fa18bc1f4b609f455f46719c6d1e->enter($__internal_c29b2af9769c6e50d57c8c1a317bd0dd39c3fa18bc1f4b609f455f46719c6d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_1b40590323a68e5daf09420c27e41fa12b911a150e289364e32acfc04aaa8520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b40590323a68e5daf09420c27e41fa12b911a150e289364e32acfc04aaa8520->enter($__internal_1b40590323a68e5daf09420c27e41fa12b911a150e289364e32acfc04aaa8520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c29b2af9769c6e50d57c8c1a317bd0dd39c3fa18bc1f4b609f455f46719c6d1e->leave($__internal_c29b2af9769c6e50d57c8c1a317bd0dd39c3fa18bc1f4b609f455f46719c6d1e_prof);

        
        $__internal_1b40590323a68e5daf09420c27e41fa12b911a150e289364e32acfc04aaa8520->leave($__internal_1b40590323a68e5daf09420c27e41fa12b911a150e289364e32acfc04aaa8520_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bbe1a7b237d1b50e3b4fb3fb1897a9c8d8067c104b5f37defc5e3bf474873041 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbe1a7b237d1b50e3b4fb3fb1897a9c8d8067c104b5f37defc5e3bf474873041->enter($__internal_bbe1a7b237d1b50e3b4fb3fb1897a9c8d8067c104b5f37defc5e3bf474873041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_67aaad1d042865ceeea885397a1eb51141ac0b6694e12b3481ebcf7456889032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67aaad1d042865ceeea885397a1eb51141ac0b6694e12b3481ebcf7456889032->enter($__internal_67aaad1d042865ceeea885397a1eb51141ac0b6694e12b3481ebcf7456889032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_67aaad1d042865ceeea885397a1eb51141ac0b6694e12b3481ebcf7456889032->leave($__internal_67aaad1d042865ceeea885397a1eb51141ac0b6694e12b3481ebcf7456889032_prof);

        
        $__internal_bbe1a7b237d1b50e3b4fb3fb1897a9c8d8067c104b5f37defc5e3bf474873041->leave($__internal_bbe1a7b237d1b50e3b4fb3fb1897a9c8d8067c104b5f37defc5e3bf474873041_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
