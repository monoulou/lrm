<?php

/* @MAUser/Profile/show.html.twig */
class __TwigTemplate_d4a7fb9d8ebb6360c4e1b25baa71299f1ae5aea4f8bd925a255fbce83c062e0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@MAUser/Profile/show.html.twig", 1);
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
        $__internal_4cffb8f7443924a335b7ebf29606654dcb0fac935d51e6f19ec4002d37247727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cffb8f7443924a335b7ebf29606654dcb0fac935d51e6f19ec4002d37247727->enter($__internal_4cffb8f7443924a335b7ebf29606654dcb0fac935d51e6f19ec4002d37247727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Profile/show.html.twig"));

        $__internal_c4aedbf2d94359dcdbeae7fda69478aab74e916241b2f63392d11604c51ae9d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4aedbf2d94359dcdbeae7fda69478aab74e916241b2f63392d11604c51ae9d2->enter($__internal_c4aedbf2d94359dcdbeae7fda69478aab74e916241b2f63392d11604c51ae9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cffb8f7443924a335b7ebf29606654dcb0fac935d51e6f19ec4002d37247727->leave($__internal_4cffb8f7443924a335b7ebf29606654dcb0fac935d51e6f19ec4002d37247727_prof);

        
        $__internal_c4aedbf2d94359dcdbeae7fda69478aab74e916241b2f63392d11604c51ae9d2->leave($__internal_c4aedbf2d94359dcdbeae7fda69478aab74e916241b2f63392d11604c51ae9d2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6ea3d41740fd1f56322b8f26982ab40a0298180611f716dbcbf146ce42cd0bde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ea3d41740fd1f56322b8f26982ab40a0298180611f716dbcbf146ce42cd0bde->enter($__internal_6ea3d41740fd1f56322b8f26982ab40a0298180611f716dbcbf146ce42cd0bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_657fece4fc6f75efd8f6569ec8326d522ca1c403e8b3e6ecae6fba9a12457cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_657fece4fc6f75efd8f6569ec8326d522ca1c403e8b3e6ecae6fba9a12457cb6->enter($__internal_657fece4fc6f75efd8f6569ec8326d522ca1c403e8b3e6ecae6fba9a12457cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@MAUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_657fece4fc6f75efd8f6569ec8326d522ca1c403e8b3e6ecae6fba9a12457cb6->leave($__internal_657fece4fc6f75efd8f6569ec8326d522ca1c403e8b3e6ecae6fba9a12457cb6_prof);

        
        $__internal_6ea3d41740fd1f56322b8f26982ab40a0298180611f716dbcbf146ce42cd0bde->leave($__internal_6ea3d41740fd1f56322b8f26982ab40a0298180611f716dbcbf146ce42cd0bde_prof);

    }

    public function getTemplateName()
    {
        return "@MAUser/Profile/show.html.twig";
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
{% endblock fos_user_content %}", "@MAUser/Profile/show.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
