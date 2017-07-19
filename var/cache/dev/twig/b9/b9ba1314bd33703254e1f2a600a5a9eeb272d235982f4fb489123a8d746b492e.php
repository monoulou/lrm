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
        $__internal_a6512f5882aaa5ffaae4c333ca37d851647e4e5a23b8d3415c44a88db9da43af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6512f5882aaa5ffaae4c333ca37d851647e4e5a23b8d3415c44a88db9da43af->enter($__internal_a6512f5882aaa5ffaae4c333ca37d851647e4e5a23b8d3415c44a88db9da43af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Profile/show.html.twig"));

        $__internal_d31f9df7e6f2e9cbeab4cf54533a470d52a5a585deaca930a906a862ff3dfb16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d31f9df7e6f2e9cbeab4cf54533a470d52a5a585deaca930a906a862ff3dfb16->enter($__internal_d31f9df7e6f2e9cbeab4cf54533a470d52a5a585deaca930a906a862ff3dfb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6512f5882aaa5ffaae4c333ca37d851647e4e5a23b8d3415c44a88db9da43af->leave($__internal_a6512f5882aaa5ffaae4c333ca37d851647e4e5a23b8d3415c44a88db9da43af_prof);

        
        $__internal_d31f9df7e6f2e9cbeab4cf54533a470d52a5a585deaca930a906a862ff3dfb16->leave($__internal_d31f9df7e6f2e9cbeab4cf54533a470d52a5a585deaca930a906a862ff3dfb16_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb743fa28ac535472ab24fb13cce0f965027c209f1479b0218ab7d6dde50f98a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb743fa28ac535472ab24fb13cce0f965027c209f1479b0218ab7d6dde50f98a->enter($__internal_eb743fa28ac535472ab24fb13cce0f965027c209f1479b0218ab7d6dde50f98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0877fbf170de0a5d47622433c93e3e3bf0e5cb0ea14d9870ad3a291416685a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0877fbf170de0a5d47622433c93e3e3bf0e5cb0ea14d9870ad3a291416685a7f->enter($__internal_0877fbf170de0a5d47622433c93e3e3bf0e5cb0ea14d9870ad3a291416685a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@MAUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_0877fbf170de0a5d47622433c93e3e3bf0e5cb0ea14d9870ad3a291416685a7f->leave($__internal_0877fbf170de0a5d47622433c93e3e3bf0e5cb0ea14d9870ad3a291416685a7f_prof);

        
        $__internal_eb743fa28ac535472ab24fb13cce0f965027c209f1479b0218ab7d6dde50f98a->leave($__internal_eb743fa28ac535472ab24fb13cce0f965027c209f1479b0218ab7d6dde50f98a_prof);

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
